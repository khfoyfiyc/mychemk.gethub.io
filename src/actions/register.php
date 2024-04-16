<?php 

require_once __DIR__ . '/../helpers.php';


$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;

$_SESSION['validation'] = [];

if (empty($name)) 
{
    addValidationError('name', 'Неверное имя');
    setMessage('error', "Неверное имя");   
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    addValidationError('email', 'Указана неправильная почта');
    setMessage('error', "Указана неправильная почта");
}

if (empty($password)) {
    addValidationError('password', 'Пароль пустой');
    setMessage('error', "Пароль пустой");
}

if ($password !== $passwordConfirmation) {
    addValidationError('password', 'Пароли не совпадают');
    setMessage('error', "Пароли не совпадают");    
}



if (!empty($_SESSION['validation'])) {
    redirect('/../register.php');
}

$pdo = getPDO();

$query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";

$params = [
    'name' => $name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT)
];

$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/login.php');

