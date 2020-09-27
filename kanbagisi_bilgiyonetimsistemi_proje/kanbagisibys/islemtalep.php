<?php

	include('baglan.php');
	session_start();
	$talepadsoyad = $_POST['talepadsoyad'];
	$talepcinsiyet = $_POST['talepcinsiyet'];
	$talepkangrubu = $_POST['talepkangrubu'];
	$taleptelefon = $_POST['taleptelefon'];
	$talepkonum = $_POST['talepkonum'];
	$talepyazar = $_SESSION['user']['uyeid'];

	$sql = "INSERT INTO talepler (talepadsoyad, talepcinsiyet, talepkangrubu, taleptelefon, talepkonum, talepyazar) VALUES (?,?,?,?,?,?)";
	$insert = $db->prepare($sql)->execute(["$talepadsoyad","$talepcinsiyet", "$talepkangrubu", "$taleptelefon", "$talepkonum", "$talepyazar"]);

	if ( $insert ) {
		header("Location: datatableskisisel.php");
	} else {
		echo "Talep gönderimi başarısız!";
	}

?>
