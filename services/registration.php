<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
    <title>МАСТЕР-Т - центр по ремонту оборудования</title>
        <link rel = "stylesheet" type="text/css" href="assets/style/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <header>   
        <a href="main.php" class="logo">
        <img src="assets/images/unnamed.png" >     
            МАСТЕР-Т</a>
            <ul>
            <li><a href="main.php" style="--i:1;" >Главная</a></li>
                <li><a href="services.php" style="--i:2;">Услуги</a></li>
                <li><a href="orders.php" style="--i:3;">Новости</a></li>
                <li><a href="contact.php"style="--i:4;">Контакты</a></li>
                <li><a href="registration.php" style="--i:5;" class="active">Войти</a></li>
            </ul>
        </header>
        <div class="parallax1">
            <h2>Войдите в аккаунт<br> Если Вы у нас в первый раз, то зарегестрируйтесь</h2><br>
           <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-button" onclick="login()">Войти</button>
                    <button type="button" class="toggle-button" onclick="register()">Регистрация</button>
                </div>
                <script src="//ulogin.ru/js/ulogin.js"></script>
                <div id="uLogin" data-ulogin="display=panel;theme=flat;fields=first_name,last_name;providers=vkontakte,odnoklassniki,google;hidden=;redirect_uri=http%3A%2F%2Fhttp%3A%2F%2F127.0.0.1%3A5500%2Fproverka.php;mobilebuttons=0;"></div>
                <form id="login" action="vender/signin.php" class="input-group" method="post">
                    <input type="text" name="login" class="input-field" placeholder="Логин"
                    required>
                    <input type="password" name="password" class="input-field" placeholder="Пароль"
                    required>
                    <input type="checkbox" class="check-box"><span>Запомнить пароль</span>
                    <button type="submit" class="submit-button">Войти</button>
                </form>
                <form id="register" class="input-group" action="vender/singup.php" method="post">
                    <input type="text" class="input-field" name="login" placeholder="Логин" name="login"
                    required>
                    <input type="email" class="input-field" name="email" placeholder="Email" name="email"
                    required>
                    <input type="password" class="input-field" name="password" placeholder="Пароль" name="password"
                    required>
                    <input type="password" class="input-field" name="password_confirm" placeholder="Подтверждение пароля" name="password-confirm"
                    required>
                    <input type="checkbox" class="check-box"><span>Я согласен с Правилами и Условиями</span>
                    <button type="submit" class="submit-button">Зарегестрироваться</button>
                </form>
            </div>
           </div>
        </div>
        <div id="footer">
            <p>Политика конфиденциальности компании «Мастер-Т» направлена на обеспечение безопасности и защиту персональных данных пользователей сайта. Она регулирует сбор, хранение и обработку информации, предоставляемой пользователями при регистрации на сайте или подписке на информационную рассылку.</p><br>
            <div class="system">
                <a href="https://vk.com/"><i class="fab fa-vk"></i></a>
                <a href="https://www.youtube.com/results?search_query=%D0%BA%D0%B0%D0%BD%D0%B0%D0%BB+%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D0%BD%D0%BE%D0%B3%D0%BE+%D1%86%D0%B5%D0%BD%D1%82%D1%80%D0%B0"><i class="fab fa-youtube"></i></a>
                <a href="https://web.telegram.org/a/"><i class="fab fa-telegram"></i></a>
                <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https //twitter.com/"><i class="fab fa-twitter"></i></a>
                </div>
                &copy; Компания МАСТЕР-Т, 2024 г. Все права защищены.
            </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
            }
        </script>
               <?php
        if($_SESSION['message']){
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
         unset($_SESSION['message']);
         ?>
    </body>
</html>