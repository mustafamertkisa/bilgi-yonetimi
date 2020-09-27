<?php

session_start();

$db = new PDO("mysql:host=localhost;dbname=kanbagisibys;charset=utf8", "root", "");

$kullanicimail = $_POST['uyemail'];
$kullanicisifre = $_POST['uyesifre'];

if (!$kullanicimail|| !$kullanicisifre) {
    die("boş alan bırakmayınız!");
}

$user = $db->query("SELECT * FROM uyeler WHERE uyemail = '$kullanicimail' AND uyesifre = '$kullanicisifre'")->fetch();

if ($user) {
    $_SESSION['user'] = $user;
    header("location:admin.php");
}else {

    header("location:uyegirisibasarisiz.php");
}
?>