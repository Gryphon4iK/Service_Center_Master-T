<?php
session_start();
require_once 'conect.php';

if(empty($_POST['full_name'])) exit("Поле не заполненно");
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services= $_POST['services'];
$name_equ= $_POST['name_equ'];
$model= $_POST['model'];
$message= $_POST['message'];

    mysqli_query($connect, "INSERT INTO `Clients` (`ID_Клиента`, `ФИО клиента`, `Email`, `Телефон`, `Вид услуги`, `Название оборудования`, `Модель`, `Сообщение`) VALUES (NULL, '$full_name', '$email', '$phone', '$services', '$name_equ', '$model', '$message')");
    header('Location: ../adminprofile.php');


?>