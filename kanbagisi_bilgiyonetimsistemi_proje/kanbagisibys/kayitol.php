<?php
  include('baglan.php')
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>&hearts; KAN VER HAYAT OL &hearts;</title>
  <style>
        body{

        background-image: url(gorseller/slider4.jpg);
        background-repeat:no-repeat;
        background-size: cover;

        }
    #kayitform {
      width: 600px;
      height: 300px;
      padding: 20px;
      background-color: skyblue;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-left: -300px;
      margin-top: -150px;
      background: #ddd; border-radius: 5px;
    }
    input {padding:10px; border:1px; solid: #ccc; border-radius: 3px;}
    #button {width:96%; height: 30px; background-color: #d30b11; cursor: pointer; color: #ffff;}

    table.ortala {
    margin-left:auto; 
    margin-right:auto;
    margin-top: 10px;
    }

  </style>
</head>
<body>

  <div id = "kayitform" align:'center'>
    <form action="islemkayit.php" method="POST">
      <table class="ortala">
        <tr>
          <td><h4 align="center"><font color="#d30b11" face="tahoma">Ücretsiz Üye Olun <br> &hearts; KAN VER HAYAT OL &hearts;</font></h4></p></td>
        </tr>
        <tr>
          <td><input type="text" name="uyead" placeholder="Adınızı giriniz" required></td>
        </tr>
        <tr> 
          <td><input type="text" name="uyesoyad" placeholder="Soyadınızı giriniz" required></td>
        </tr>
        <tr>
          <td><input type="email" name="uyemail" placeholder="E-Posta adresinizi giriniz" required></td>
        </tr>
        <tr>
          <td><input type="password" name="uyesifre" placeholder="Parolanızı oluşturunuz" required></td>
        </tr>
        <tr>
          <td><button type="submit" name="" id="button">Kayıt Ol</button></td>
        </tr>

      </table>
    </form>
  </div>

</body>
</html>