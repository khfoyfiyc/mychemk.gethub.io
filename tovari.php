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
    <title>GAZ</title>
</head>
<body>
    <header>

    <div class="header">
<a class="num">+7 (985) 888-888-8 <br> (бесплатно по РФ)</a>
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
    <a class="line-text" href="avtoserv.html">АВТОСЕРВИС</a>
    <a class="line-text" href="zeny.html">КАТАЛОГ</a>
    <a class="line-text" href="akzii.html">АКЦИИ</a>
    <a class="line-text" href="kontakti.html">КОНТАКТЫ</a>
</div>

<div class="cards">
    <div class="card">
        <div class="card__top">
    
          <a href="#" class="card__image">
            <img
              src="img/katalog5.jpeg"
              alt="бегунок бесконтактный"
            />
          </a>
    

        </div>
    
        <div class="card__bottom">
    
          <div class="card__prices">
            <div class="card__price card__price--discount">1000..</div>
            <div class="card__price card__price--common">1300..</div>
          </div>
    
          <a href="#" class="card__title">
            вкладыши коренные 0,25 402, УМЗ
          </a>
    
          <button class="card__add">В корзину</button>
        </div>
      </div>
      <div class="card">
        <div class="card__top">
    
          <a href="#" class="card__image">
            <img
              src="img/katalog6.jpeg"
              alt="бегунок бесконтактный"
            />
          </a>
    
 
        </div>
    
        <div class="card__bottom">
    
          <div class="card__prices">
            <div class="card__price card__price--discount">1100..</div>
            <div class="card__price card__price--common">1400..</div>
          </div>
    
          <a href="#" class="card__title">
            адсорбер ЕВРО-3 (без клапана)
          </a>
    
          <button class="card__add">В корзину</button>
        </div>
      </div>
    
      <div class="card">
        <div class="card__top">
    
          <a href="#" class="card__image">
            <img
              src="img/katalog7.jpeg"
              alt="бегунок бесконтактный"
            />
          </a>
    

        </div>
    
        <div class="card__bottom">
    
          <div class="card__prices">
            <div class="card__price card__price--discount">11000.</div>
            <div class="card__price card__price--common">14000.</div>
          </div>
    
          <a href="#" class="card__title">
            блок управления двигателем МИКАС 
          </a>
    
          <button class="card__add">В корзину</button>
        </div>
      </div>
    
      <div class="card">
        <div class="card__top">
    
          <a href="#" class="card__image">
            <img
              src="img/katalog8.jpeg"
              alt="бегунок бесконтактный"
            />
          </a>
    

        </div>
    
        <div class="card__bottom">
    
          <div class="card__prices">
            <div class="card__price card__price--discount">7900..</div>
            <div class="card__price card__price--common">8600..</div>
          </div>
    
          <a href="#" class="card__title">
            глушитель ГАЗ-2217,2752 дв. Камминс 2,8 
          </a>
    
          <button class="card__add">В корзину</button>
        </div>
      </div>

    <div class="card">
        <div class="card__top">
    
          <a href="#" class="card__image">
            <img
              src="img/katalog1.jpeg"
              alt="бегунок бесконтактный"
            />
          </a>
    
 
        </div>
    
        <div class="card__bottom">
    
          <div class="card__prices">
            <div class="card__price card__price--discount">140...</div>
            <div class="card__price card__price--common">150...</div>
          </div>
    
          <a href="#" class="card__title">
            бегунок бесконтактный (БОАДЭ)
          </a>
    
          <button class="card__add">В корзину</button>
        </div>
      </div>
    
      <div class="card">
        <div class="card__top">
    
          <a href="#" class="card__image">
            <img
              src="img/katalog2.jpeg"
              alt="бегунок бесконтактный"
            />
          </a>
    
 
        </div>
    
        <div class="card__bottom">
    
          <div class="card__prices">
            <div class="card__price card__price--discount">1000..</div>
            <div class="card__price card__price--common">1150..</div>
          </div>
    
          <a href="#" class="card__title">
            бендикс 402 малый (БАТЭ)
          </a>
    
          <button class="card__add">В корзину</button>
        </div>
      </div>
    
      <div class="card">
        <div class="card__top">
    
          <a href="#" class="card__image">
            <img
              src="img/katalog3.jpeg"
              alt="бегунок бесконтактный"
            />
          </a>
    
 
        </div>
    
        <div class="card__bottom">
    
          <div class="card__prices">
            <div class="card__price card__price--discount">240...</div>
            <div class="card__price card__price--common">300...</div>
          </div>
    
          <a href="#" class="card__title">
            вариатор (сопротивление ) 
          </a>
    
          <button class="card__add">В корзину</button>
        </div>
      </div>
    
      <div class="card">
        <div class="card__top">
    
          <a href="#" class="card__image">
            <img
              src="img/k.jpeg"
              alt="бегунок бесконтактный"
            />
          </a>
    
          
        </div>
    
        <div class="card__bottom">
    
          <div class="card__prices">
            <div class="card__price card__price--discount">190...</div>
            <div class="card__price card__price--common">200...</div>
          </div>
    
          <a href="#" class="card__title">
            винт регулировочный клапана (коромысла) 
          </a>
    
          <button class="card__add">В корзину</button>
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
            <a class="menu-txt1">+7 (985) 888-888-8</a>
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
            <a class="podval-text">Автомагазин Gaz © 2005 - 2023. Все права<br>
                защищены.</a>
                <img src="img/visa.svg fill.png" class="podval-img">
                <img src="img/maestro.svg.png" class="podval-img">
                <img src="img/Page-1.png" class="podval-img">
        </div>
        
        </body>
        </html>