<?php 
require_once __DIR__ . '/src/helpers.php';
checkGuest();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Mobail</title>
</head>
<body>
    <header>

    <div class="header">
<a class="num">+7 (952) 022 44 42 <br> (бесплатно по РФ)</a>
    </div>

    <div class="login">
    <form action="src/actions/logout.php" method="post">
            <a href="#" onclick="this.parentNode.submit()"><img class="login-img" src="img/вход.png"></a>
        </form>
        
    </div>
    <a class="login-text" href="register.php">Регистрация<br>Вход</a>
    <div class="logo">
        <a href="index.html"><img src="img/logo.png" class="logo-img"></a>
    </div>

    <div class="inputtype">
            <form action="#" target="_blank" class="form-search">
              <input type="hidden" name="searchid" value="808327">
              <input type="search" name="text" required placeholder="Поиск по сайту">
              <input type="submit" value="&#128269;">
            </form>
    </div>

    <div class="korz">
        <a href="korzina.html"><img src="img/корзина.png" class="korz-img"></a>
    </div>
    <a class="korz-text">0 ₽ <br> 0 Позиций</a>
</header>
<div class="header-line">
    <a class="line-text" href="okompanii.html">О КОМПАНИИ</a>
    <a class="line-text" href="avtoserv.html">СЕРВИС</a>
    <a class="line-text" href="zeny.html">КАТАЛОГ</a>
    <a class="line-text" href="akzii.html">АКЦИИ</a>
    <a class="line-text" href="kontakti.html">КОНТАКТЫ</a>
</div>
<div class="gazz">
    <img class="gazz-img" src="img/div.swiper-slide.png">
</div>
<div class="tovari">
    <a class="tovari-text">ПОПУЛЯРНЫЕ ТОВАРЫ</a>
</div>
<div class="mini-katalog">
    <img src="img/Link.png" class="katalog-img">
    <img src="img/Link (1).png" class="katalog-img">
    <img src="img/Link (2).png" class="katalog-img">
    <img src="img/Link (3).png" class="katalog-img">
</div>
    <div class="katalog-txt">
    <a class="text-katalog">Чехол на iphone 11</a>
    <a class="text-katalog">Защитное стекло на iphone 11</a>
    <a class="text-katalog">Наушники apple air pods</a>
    <a class="text-katalog">Зарядное устройство на iphone</a>
</div>
<div class="korzina-button">
    <a class="korzina-money">1 100 <br> ₽</a>
    <form action="korzina.html" class="for">
    <p><button class="btn">В корзину</button></p>
    </form>
    <a class="korzina-money">500 <br> ₽</a>
    <form action="korzina.html" class="for">
    <p><button class="btn">В корзину</button></p>
    </form>
    <a class="korzina-money">15 000 <br> ₽</a>
    <form action="korzina.html" class="for">
    <p><button class="btn">В корзину</button></p>
    </form>
    <a class="korzina-money"3 400 <br> ₽</a>
    <form action="korzina.html" class="for">
    <p><button class="btn">В корзину</button></p>
    </form>
</div>
<div class="forma01">
    <a class="form1txt">Нет времени на самостоятельный поиск?<br>Есть вопросы?</a>
</div>
<div class="forma02">
    <a class="form2txt">Оставьте заявку на бесплатную консультацию от наших специалистов.
        <br>Для этого заполните форму и нажмите кнопку “Отправить”.</a>
</div>
<div class="forma03">
    <form action="" class="form">
        <input type="text" placeholder="Ваше Имя" class="form__input" id="name" />
        <label for="name" class="form__label"></label>
    </form>
</div>
    <div class="forma04">
    <form action="" class="form">
        <input type="text" placeholder="Ваш Номер Телефона" class="form__input" id="name" />
        <label for="name" class="form__label"></label>
    </form>
    </div>
    <div class="forma05">
    <a class="form5txt">Нажимая кнопку «ОТПРАВИТЬ», я даю свое согласие на обработку моих персональных данных, в<br>
        соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных» и<br>
        Политикой конфиденциальности</a>
    </div>
<div class="forma6">
    <form action="index.html" class="for">
    <p><button class="btn">ОТПРАВИТЬ</button></p>
    </form>
</div>
<div class="podfooter">
    <a class="podtext">Наши преимущества</a>
</div>
<div class="podfooter-img">
    <img src="img/div.swiper-container.png" class="podfooter-img-img">
</div>
<div class="podfooter01">
    <a class="podtext">Интернет-магазин аксессуаров на телефоны</a>
</div>
<div class="podfooter02">
    <a class="podtext2">Компания «Mobile» занимается продажей аксессуарами для телефонов от производителей. Мы продаем только оригинальные аксессуары<br>
        нашим клиентам. Также наша компания занимается ремонтом телефонов и аксессуаров<br>
        ГАЗЕЛЬ.</a><br><a class="podtext2">Обращаясь в «Mobail», вы получаете:</a>
</div>
<div class="podfooter03">
    <a class="podtext03">возможность заказать оригинальные аксессуары для Вашего телефона с доставкой по всей России любым удобным способом;<br>
        уверенность в качестве товаров и услуг компании благодаря сертификатам качества;<br>
        качественный и оперативный ремонт своего телефона с использованием оригинальных комплектующих;</a>
</div>

<div class="footer">
<div class="navigation">
    <a class="nav01">НАВИГАЦИЯ</a>
    <a class="nav01">КОНТАКТЫ</a>
    <a class="nav02">ПЕРСОНАЛЬНЫЕ УСЛОВИЯ</a>
</div>    
<div class="menu1">
    <a href="okompanii.html" class="menu-txt">О КОМПАНИИ</a>
    <a href="index.html" class="menu-txt">ГЛАВНАЯ</a>
    <a class="menu-txt1">+7 (952) 022 44 42</a>
    <form action="" class="form">
        <input type="text" placeholder="Ваш email" class="form__input" id="name" />
        <label for="name" class="form__label"></label>
            <button class="btn">ОТПРАВИТЬ</button>
    </form>
</div>
<div class="menu2">
    <a href="kontakti.html" class="menu-txt2">КОНТАКТЫ</a>
    <a href="zeny.html" class="menu-txt2">ЦЕНЫ</a>
    <a class="menu-txt3">(бесплатно по РФ)</a>
    <a class="menu-txt4">Нажимая кнопку «ОТПРАВИТЬ», я даю свое согласие<br>
        на обработку моих персональных данных, в<br>
        соответствии с Федеральным законом от 27.07.2006<br>
        года №152-ФЗ «О персональных данных» и<br>
        Политикой конфиденциальности</a>
</div>
<div class="podval">
    <a class="podval-text">магазин аксессуаров «Mobile» - 2023. Все права<br>
        защищены.</a>
        <img src="img/visa.svg fill.png" class="podval-img">
        <img src="img/maestro.svg.png" class="podval-img">
        <img src="img/Page-1.png" class="podval-img">
</div>

</body>
</html>