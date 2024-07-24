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
        <a href="#" class="logo">
            <img src="assets/images/unnamed.png" >    
            МАСТЕР-Т</a>
            <!-- <ul>
            <li><a href="main.php" >Главная</a></li>
                <li><a href="services.php" >Услуги</a></li>
                <li><a href="orders.php" >Заказы</a></li>
                <li><a href="contact.php">Контакты</a></li>
                <li><a href="profile.php" class="active">
                    <img src="assets/images/profile_23044.png">
                </a></li>
            </ul> -->
            <a href="vender/logout.php" class="logout">
                <img src="assets/images/free-icon-logout-4400828.png" class="img">
                <span class="tooltiptext">Выход</span>
            </a>

        </header>

        <div class="parallax1">
            <section class="home">
                <div class="home-content">
                    <h1>Добро пожаловать <br><?= $_SESSION['user']['login'] ?></br> </h1>
                    <h3>User Site</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque eum quae tempore hic autem dolorem provident blanditiis delectus ad quod.</p>
                    <a href="#sec-2" id="scroll_button" class="button">Сделать заказ</a>
                </div>
                <div class="home-img">
                    <div class="glowing-circle">
                        <span></span>
                        <span></span>
                        <div class="image">
                            <img src="assets/images/pngwing.com.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- <form>
                 <h2><?= $_SESSION['user']['login'] ?></h2>
                 <a href="#"><?= $_SESSION['user']['email'] ?></a>
                 <a href="vender/logout.php" class="logout">Выход</a>
            </form> -->
        <div class="backs" id="sec-2">  
            <div class="containers">
        <div class="contact-box">
            <div class="con-box-body" >
                <div class="con-box-body-item left">
                    <div class="app-title">
                        <label>Оформление</label>
                        <label>Заказа</label>
                    </div>
                    <div class="app-contact">Контакты: +7 (954) 456-62-32</div>
                </div>
                                 <form class="con-box-body-item" action="vender/ordersup.php" method="post">
            <div class="col">
                <div class="form-groups">
                    <input name="full_name" type="text" class="app-form-control" placeholder="ФИО" required>
                </div>
            </div>

            <div class="col">
                <div class="form-groups">
                    <input name="email" type="email" class="app-form-control" placeholder="E-mail">
                </div>
            </div>

            <div class="col">
                <div class="form-groups">
                    <input name="phone" type="text" class="app-form-control" placeholder="Телефон">
                </div>
            </div>

            <div class="col">
                <div class="form-groups">
                    <input name="name_equ" type="text" class="app-form-control" placeholder="Название оборудования">
                </div>
            </div>

            <div class="col">
                <div class="form-groups">
                    <input name="model" type="text" class="app-form-control" placeholder="Модель">
                </div>
            </div>

            <div class="col">
                <div class="form-groups">
                    <select name="services" class="app-form-control" placeholder="Выберите вид услуг">
                        <option>Ремонт настольных компьютеров</option>
                        <option>Ремонт ноутбуков</option>
                        <option>Ремонт сервисного оборудования</option>
                        <option>Ремонт смартфонов OC Android</option>
                        <option>Ремонт iPhone</option>
                        <option>Микропрограммное обеспечение</option>
                        <option>Ремонт другой техники</option>
                    </select>
                </div>
            </div>

            <div class="col">
                <div class="form-groups message">
                    <textarea name="message" placeholder="Опишите Вашу проблему..." class="app-form-control"></textarea>
                </div>
            </div>

            <div class="col-buttons">
                <button type="submit" class="col-but button">ЗАКАЗАТЬ</button>
            </div>
</form>
                         </div>
           </div>
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
    </body>
</html>