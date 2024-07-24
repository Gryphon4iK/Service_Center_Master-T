<?php
session_start();
include "vender/conect.php";
$result = mysqli_query($connect, "SELECT * FROM `Clients`");
$global = mysqli_query($connect, "SELECT s.ФИО AS 'ФИО Сотрудника', s.Контактный_телефон AS 'Контактный телефон', s.Домашний_адрес AS 'Домашний адрес', d.Должность AS 'Должность'
FROM `Сотрудники` s
JOIN `Должность` d ON s.Должность = d.ID_Должности");
$zapchasty = mysqli_query($connect, "SELECT * FROM `Склад комплектующих`");
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
            <a href="vender/logout.php" class="logout">
                <img src="assets/images/free-icon-logout-4400828.png" class="img">
                <span class="tooltiptext">Выход</span>
            </a>

        </header>

    <div class="parallax1">
            <section class="home">
                <div class="home-content">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1>Панель Администратора</h1>
             
            <div class="ag-format-container">
  <div class="ag-courses_box">
    <button id="openRightModalBtn" class="ag-courses_item">
      <a class="ag-courses-item_link">
        <div  class="ag-courses-item_bg" ></div>

        <div class="ag-courses-item_title">
          Составление заявок
        </div>
      </a>
</button>
<div id="RightModal" class="modal">
        <div class="modal-content">
        <span id="closeRightModalBtn" style="float: right; cursor: pointer; margin: 30px;">&times;</span>
            <div class="backs">  
            <div class="containers">
        <div class="contact-box">
            <div class="con-box-body" >
                <div class="con-box-body-item left">
                    <div class="app-title">
                        <label>Оформление</label>
                        <label>Заказа для клиента</label>
                    </div>
                </div>
                                 <form class="con-box-body-item" action="vender/ordersup2.php" method="post">
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
</div>
            <script>
        var rightmodal = document.getElementById('RightModal');
        var rightopenBtn = document.getElementById('openRightModalBtn');
        var rightcloseBtn = document.getElementById('closeRightModalBtn');

        rightopenBtn.addEventListener('click', function() {
            rightmodal.style.display = 'flex';
        });

        rightcloseBtn.addEventListener('click', function() {
            rightmodal.style.display = 'none';
        });
    </script>

    <button id="openModalBtn" class="ag-courses_item">
      <a class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div  class="ag-courses-item_title">
            Просмотр заказов
        </div>

        <div class="ag-courses-item_date-box">
          Обновленно:
          <span class="ag-courses-item_date">
            04.04.2024
          </span>
        </div>
      </a>
    </button>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span id="closeModalBtn" style="float: right; cursor: pointer;">&times;</span>
            <h2 style="color: #008cff;">Заказы</h2>
          <table>
            <thead>
              <tr>
                <th>ФИО
                <th>E-mail
                <th>Номер телефона
                <th>Вид услуги
                <th>Название оборудования
                <th>Модель
                <th>Сообщение
              </tr>
            </thead>
            <tbody>
            <?php
           while($order = mysqli_fetch_assoc($result)): ?>
              <tr>
            <td><?php echo $order['ФИО клиента'];?></td>
            <td><?php echo $order['Email'];?></td>
            <td><?php echo $order['Телефон'];?></td>
            <td><?php echo $order['Вид услуги'];?></td>
            <td><?php echo $order['Название оборудования'];?></td>
            <td><?php echo $order['Модель'];?></td>
            <td><?php echo $order['Сообщение'];?></td>
              </tr>
              <?php endwhile;?>
            </tbody>
          </table>
        </div>
    </div>
    <script>
        var modal = document.getElementById('myModal');
        var openBtn = document.getElementById('openModalBtn');
        var closeBtn = document.getElementById('closeModalBtn');

        openBtn.addEventListener('click', function() {
            modal.style.display = 'flex';
        });

        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });
    </script>

    <div class="ag-courses_item">
      <a class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
            Графики работ сотрудников
        </div>

        <div class="ag-courses-item_date-box">
          Обновленно:
          <span class="ag-courses-item_date">
            15.02.2024
          </span>
        </div>
      </a>
    </div>

    <button id="openLoysModalBt" class="ag-courses_item">
      <a class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Список сотрудников
        </div>
      </a>
      </button>
      <div id="LoysModals" class="modals">
        <div class="modal-contents">
            <span id="closeLoysModalBtns" style="float: right; cursor: pointer;">&times;</span>
            <h2>Список сотрудников</h2>
            <table>
              <thead>
                <tr>
                <th>ФИО Сотрудника
                <th>Контактный телефон
                <th>Домашний адрес
                <th>Должность
                </tr>
              </thead>
            <tbody>
            <?php
             while($orders = mysqli_fetch_assoc($global)): ?>
             <tr>
              <td><?php echo $orders['ФИО Сотрудника'];?>
              <td><?php echo $orders['Контактный телефон'];?>
              <td><?php echo $orders['Домашний адрес'];?>
              <td><?php echo $orders['Должность'];?>
             </tr>
              <?php endwhile;?>
            </tbody>
            </table>
            </div>
            
    </div>
    <script>
        var loysmodal = document.getElementById('LoysModals');
        var loysopenBtn = document.getElementById('openLoysModalBt');
        var loyscloseBtn = document.getElementById('closeLoysModalBtns');

        loysopenBtn.addEventListener('click', function() {
            loysmodal.style.display = 'flex';
        });

        loyscloseBtn.addEventListener('click', function() {
            loysmodal.style.display = 'none';
        });
    </script>
    <button id="openZapModalBtn" class="ag-courses_item">
      <a class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Список запчастей на складе
        </div>

        <div class="ag-courses-item_date-box">
          Обновленно:
          <span class="ag-courses-item_date">
            30.11.2022
          </span>
        </div>
      </a>
      </button>
      <div id="ZapModal" class="modals">
        <div class="modal-contents">
            <span id="closeZapModalBtn" style="float: right; cursor: pointer;">&times;</span>
            <h2>Список запчастей на складе</h2>
            <table>
            <thead>
              <tr>
                <th>Наименование товара
                <th>Стоимость за еднициу в руб.
                <th>Количество на складе (тыс. шт.)
                <th>Стоимость всех материалов (тыс. руб.)
              </tr>
            </thead>
            <tbody>
            <?php
             while($orderi = mysqli_fetch_assoc($zapchasty)): ?>
             <tr>
              <td><?php echo $orderi['Наименование товара'];?>
              <td><?php echo $orderi['Стоимость за единицу'];?>
              <td><?php echo $orderi['Количество на складе'];?>
              <td><?php echo $orderi['Стоимость всех материалов'];?>
             </tr>
              <?php endwhile;?>
            </tbody>
            </table>
            </div> 
    </div>
    <script>
        var zapmodal = document.getElementById('ZapModal');
        var zapopenBtn = document.getElementById('openZapModalBtn');
        var zapcloseBtn = document.getElementById('closeZapModalBtn');

      zapopenBtn.addEventListener('click', function() {
            zapmodal.style.display = 'flex';
        });

        zapcloseBtn.addEventListener('click', function() {
          zapmodal.style.display = 'none';
        });
    </script>

    <div class="ag-courses_item">
      <a class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Другие элементы управления
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a class="ag-courses-item_link">
        <div class="ag-courses-item_bg">
        </div>
        <div class="ag-courses-item_title">
          Техническая поддержка
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Отзывы
        </div>

        <div class="ag-courses-item_date-box">
          Обновленно:
          <span class="ag-courses-item_date">
            31.01.2024
          </span>
        </div>
      </a>
    </div>

  </div>
</div>
</div>
</section>
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