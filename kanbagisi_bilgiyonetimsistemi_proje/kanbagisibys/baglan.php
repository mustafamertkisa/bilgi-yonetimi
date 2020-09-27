<?php

try {

    $db = new PDO("mysql:host=localhost;dbname=kanbagisibys;charset=utf8", "root", "");


} catch( PDOException $e ){

    echo "Veritabanı Hatası: " . $e -> getMessage();

}


?>
