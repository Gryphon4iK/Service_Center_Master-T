<?php
session_start();
require_once 'conect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

if($login === "admin" && $password === md5("admin")){
    header('Location: ../adminprofile.php');
    exit;
}

$check_user = mysqli_query($connect, "SELECT * FROM Users WHERE login = '$login' AND password = '$password'");
if (mysqli_num_rows($check_user) > 0){

$user = mysqli_fetch_assoc($check_user);


$_SESSION['user'] = [
    "id"=> $user['id'],
    "login"=>$user['login'],
    "email" => $user['email']
];

header('Location: ../profile.php');

}else{
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../registration.php');

}
?>
<pre>
    <?php
print_r($check_user);
print_r($user);
?>
</pre>