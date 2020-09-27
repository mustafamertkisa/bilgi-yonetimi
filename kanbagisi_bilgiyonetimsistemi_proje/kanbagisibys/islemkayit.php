<?php
	include('baglan.php');

	$uyead = $_POST['uyead'];
	$uyesoyad = $_POST['uyesoyad'];
	$uyemail = $_POST['uyemail'];
	$uyesifre = $_POST['uyesifre'];

	$sql = "INSERT INTO uyeler (uyead, uyesoyad, uyemail, uyesifre) VALUES (?,?,?,?)";
	$insert = $db->prepare($sql)->execute(["$uyead", "$uyesoyad", "$uyemail", "$uyesifre"]);

	if ( $insert ) {
		header("Location: uyegirisikayitbasarili.php");
	} else {
		echo "Kullanıcı kaydı başarısız!";
	}
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
			
		}else {
			echo "Bilgiler hatalı";
		}
?>
