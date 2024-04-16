<?php 
require_once __DIR__ . '/src/helpers.php';
checkGuest();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainzeny.css">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>GAZ</title>
</head>
<body>
    <header>

    <div class="header">
<a class="num">+7 (952) 022 44 42 <br> (бесплатно по РФ)</a>
    </div>

    <div class="login">
        <a href="registr.html"><img class="login-img" src="img/вход.png"></a>
        
    </div>
    <a class="login-text" href="registr.html">Регистрация<br>Вход</a>
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
<div class="row">
    <div class="col-75">
      <div class="container">
        <form action="/action_page.php">
  
          <div class="row">
            <div class="col-50">
              <h3>Платежный адрес</h3>
              <label for="fname"><i class="fa fa-user"></i>Имя</label>
              <input type="text" id="fname" name="firstname" placeholder="Мартынов Никита Сергеевич">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="martynovn475@gmail.com">
              <label for="adr"><i class="fa fa-address-card-o"></i>Адрес</label>
              <input type="text" id="adr" name="address" placeholder="ким чи">
              <label for="city"><i class="fa fa-institution"></i>Город</label>
              <input type="text" id="city" name="city" placeholder="Чебоксары">
  
              <div class="row">
                <div class="col-50">
                  <label for="state">Государство</label>
                  <input type="text" id="state" name="state" placeholder="Россия">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>
  
            <div class="col-50">
              <h3>Платеж</h3>
              <label for="fname">Допустимые карты</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Имя на карте</label>
              <input type="text" id="cname" name="cardname" placeholder="Мартынов Никита Сергеевич">
              <label for="ccnum">Номер кредитной карты</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Годен месяц</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="Сентябрь">
  
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Годен год</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2021">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>
  
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Адрес доставки совпадает с платежным адресом
          </label>
          <input type="submit" value="Продолжить оформление заказа" class="btn">
        </form>
      </div>
    </div>
  
    <div class="col-25">
      <div class="container">
        <h4>Корзина
          <span class="price" style="color:black">
            <i class="fa fa-shopping-cart"></i>
            <b>4 товара</b>
          </span>
        </h4>
        <p><a href="#">аккумулятор на iphone 11</a> <span class="price">5 800₽</span></p>
        <p><a href="#">чехол на iphone 11</a> <span class="price">1100₽</span></p>
        <p><a href="#">защитное стекло на iphone 11</a> <span class="price">1300₽</span></p>
        <p><a href="#">наушники air pods</a> <span class="price">1400₽</span></p>
        <hr>
        <p>Всего <span class="price" style="color:black"><b>9600₽</b></span></p>
      </div>
    </div>
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
        <a class="podval-text">Магазин аксессуаров - 2023. Все права<br>
            защищены.</a>
            <img src="img/visa.svg fill.png" class="podval-img">
            <img src="img/maestro.svg.png" class="podval-img">
            <img src="img/Page-1.png" class="podval-img">
    </div>
    
    </body>
    </html>