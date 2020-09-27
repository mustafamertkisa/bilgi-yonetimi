<?php 

include("baglan.php");

$silinecek = $_POST['silinecek'];

if(isset($_POST["sil"]))
{
    
    $sorgu= "DELETE FROM `talepler` WHERE `talepler`.`talepid` = '$silinecek' ";
    
    $db->query($sorgu);

    header("location:datatableskisisel.php");

}
?>