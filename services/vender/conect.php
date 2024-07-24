<?php

$connect = mysqli_connect('localhost', 'root', '', 'Master-T-DB');


if(!$connect){
    die('Error connect to DataBase');
}