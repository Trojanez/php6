<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html, charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/template/css/all.css" type="text/css"/>
<link rel="stylesheet" href="/template/css/jquery.bxslider.css" type="text/css"/>
<link rel="stylesheet" href="/template/css/style.css" type="text/css"/>
<link rel="stylesheet" href="/template/css/ie.css" type="text/css"/>
<link rel="stylesheet" href="/template/css/buy.css" type="text/css"/>
<link rel="stylesheet" href="/template/css/alcohol.css" type="text/css"/>
<link rel="stylesheet" href="/template/css/register.css" type="text/css"/>
<link rel="stylesheet" href="/template/css/auth.css" type="text/css"/>
<script type="text/javascript" src="/template/js/jquery-3.3.1.js"></script>
<script src="/template/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/template/js/jquery.dropdown.js"></script>
<script type="text/javascript" src="/template/js/jquery.dropdownPlain.js"></script>
<script type="text/javascript" src="/template/js/main.js"></script>
<script type="text/javascript" src="/template/js/register.js"></script>
<title>TITLE</title>
</head>
<body>
	<div id="wrapper">
		<div id="header">
            <ul class="info">
                            <li><a href="/">Главная</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Оплата и доставка</a></li>
                            <li><a href="#">Контактная информация</a></li>
                        </ul>
            <div class="layout">
                <div class="all">
                    <div class="logo">
                        <h1>
                            <a href="/"></a>
                        </h1>
                    </div>
                    <div class="contact">
                        <p class="phone">(057) <span>7323471</span></p>
                        <p class="email">ener_sekret@ukr.net</p>
                    </div>
                    <div class="general">
                        <form class="search">
                            <input type="search" name="search" placeholder="Поиск">
                        </form>
                    </div>
                    <div id="modal_form"><!-- Сaмo oкнo -->
                        <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
                        <div class="reg">
                            <h4>Регистрация</h4>
                        </div>
                        <form id="reg_form" method="post">
                            <label for="number">Номер телефона:</label><br/>
                            <p><input type="tel" id="number" name="phone_number" list="tel-list" placeholder="+38***123-45-67"></p>
                            <label for="name">Имя:</label><br/>
                            <input type="text" name="name" id="name" /><br/>
                            <label for="email_reg">Электронный адрес:</label><br/>
                            <input type="email" name="email" id="email_reg" /><br/>
                            <label for="pass_reg">Пароль:</label><br/>
                            <input type="password" id="password_reg" name="password" /><br/>
                            <label for="pass1">Введите Ваш пароль повторно:</label><br/>
                            <input type="password" id="pass1" name="confirm_password" /><br/>
                            <input type="submit" id="register" name="submit" class="button" value="Регистрация"/>
                        </form>
                    </div>
                    <div id="overlay"></div><!-- Пoдлoжкa -->
                    <div id="modal_form1"><!-- Сaмo oкнo -->
                        <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
                        <div class="auth">
                            <h4>Авторизация</h4>
                        </div>
                        <form id="auth_form" method="post">
                            <label for="email_auth">Электронный адрес:</label><br/>
                            <input type="email" id="email_auth" name="email" /><br/>
                            <label for="pass_auth">Пароль:</label><br/>
                            <input type="password" id="password_auth" name="pass" /><br/>
                            <input type="submit" class="button" value="Авторизация"/>
                        </form>
                    </div>
                    <div id="overlay"></div><!-- Пoдлoжкa -->
                    <div class="registration">
                        <a id="go" href="/user/register">Регистрация</a>
                        <a id="go1" href="/user/authorisation">Авторизация</a>
                        <a href="#" class="cart">Ваша карзина пуста</a>
                    </div>
                    </div>
                    <div id="mainmenu">
                        <ul>
                <!-- Пункт меню 1 -->
                            <li class="parent"><a href="/category-alcohol/">Алкогольные напитки</a>
                                <ul>
                                    <li><a href="#">Водка</a></li>
                                    <li class="parent"><a href="#">Вина</a>
                                        <ul>
                                            <li><a href="#">Сухое</a></li>
                                            <li><a href="#">Сладкое</a></li>
                                            <li><a href="#">Полусладкое</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent"><a href="#">Коньяк</a>
                                        <ul>
                                            <li><a href="#">3 звезды</a></li>
                                            <li><a href="#">4 звезды</a></li>
                                            <li><a href="#">5 звезд</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent"><a href="#">Эксклюзивные алкогольные напитки</a>
                                        <ul>
                                            <li><a href="#">Виски</a></li>
                                            <li><a href="#">Ром</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="parent"><a href="#">Безалкогольные напитки</a>
                                <ul>
                                    <li class="parent"><a href="#">Сладкие напитки</a>
                                        <ul>
                                            <li><a href="#">Coca-cola</a></li>
                                            <li><a href="#">Fanta</a></li>
                                            <li><a href="#">Sprite</a></li>
                                            <li><a href="#">Бон Буасон</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent"><a href="#">Соки</a>
                                        <ul>
                                            <li><a href="#">Sandora</a></li>
                                            <li><a href="#">Садочок</a></li>
                                            <li><a href="#">ОКЗДХ</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent"><a href="#">Минеральная вода</a>
                                        <ul>
                                            <li><a href="#">Сильногазированная</a></li>
                                            <li><a href="#">Среднегазированная</a></li>
                                            <li><a href="#">Негазированная</a></li>
                                        </ul>
                                    </li>
                                    <li class="parent"><a href="#">Чай, кофе</a>
                                        <ul>
                                            <li><a href="#">Чай черный</a></li>
                                            <li><a href="#">Чай зеленый</a></li>
                                            <li><a href="#">Nescafe</a></li>
                                            <li><a href="#">Черная Карта</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="parent"><a href="#">Табачные изделия</a>
                                <ul>
                                    <li><a href="#">Сигареты</a></li>
                                    <li><a href="#">Сигары</a></li>
                                </ul>
                            </li>
                        </ul>
        <!-- Конец списка -->
                    </div>
    <!-- Конец блока #mainmenu -->
                </div>
            </div>