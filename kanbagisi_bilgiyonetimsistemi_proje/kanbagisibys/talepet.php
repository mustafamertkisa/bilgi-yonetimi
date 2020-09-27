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

      background-image: url(gorseller/slider1.jpg);
      background-repeat:no-repeat;
      background-size: cover;

      }
    #talepform {
      width: 600px;
      height: 410px;
      padding: 20px;
      background-color: skyblue;
      position: absolute;
      top: 40%;
      left: 50%;
      margin-left: -300px;
      margin-top: -150px;
      background: #ddd; border-radius: 5px;
    }
    input {padding:10px; border:1px; solid: #ccc; border-radius: 3px;}
    #button {width:97%; height:35px; background-color: #d30b11; cursor: pointer; color: #ffff;}

    table.ortala {
    margin-left:auto; 
    margin-right:auto;
    margin-top: 0px;
    }

  </style>
</head>
<body>

  <div id = "talepform" align:'center'>
    <form action="islemtalep.php" method="POST">
      <table class="ortala">
        <tr>
          <td><h4 align="center"><font color="#d30b11" face="tahoma">Kan Talebi Oluşturun <br><hr> &hearts; KAN VER HAYAT OL &hearts;</font></h4></p></td>
        </tr>
        <tr>
          <td>Cinsiyet: <input type="radio" name="talepcinsiyet" value="erkek" required>Erkek
                         <input type="radio" name="talepcinsiyet" value="kadın" required>Kadın
                         <br><br>
          </td>
        </tr>
        <tr align="left"> 
          <td>Kan Grubu: 
          <input type="radio" name="talepkangrubu" value="AB Rh+" required>AB Rh+
          <input type="radio" name="talepkangrubu" value="AB Rh-" required>AB Rh-
          <input type="radio" name="talepkangrubu" value="A Rh+" required>A Rh+
          <input type="radio" name="talepkangrubu" value="A Rh-" required>A Rh-
          </td>
          <tr align="right"> 
            <td><br>
            <input type="radio" name="talepkangrubu" value="B Rh+" required>B Rh+
            <input type="radio" name="talepkangrubu" value="B Rh-" required>B Rh-
            <input type="radio" name="talepkangrubu" value="O Rh+" required>O Rh+
            <input type="radio" name="talepkangrubu" value="O Rh-" required>O Rh-
            <br><br>
            </td>
          </tr>
        </tr>
        <tr>
          <td align="left">İrtibat Ad-Soyad:&nbsp; &nbsp; <input type="text" name="talepadsoyad"><br></td>
        </tr>
        <tr>
          <td align="left">İrtibat Telefon No:&nbsp; <input type="text" name="taleptelefon" placeholder="05xxxxxxxxx" required><br></td>
        </tr>
        <tr>
          <td align="left">İhtiyaç Konumu:&nbsp; &nbsp; <input type="text" name="talepkonum" required><br><br></td>
        </tr>
        <tr>
          <td><button type="submit" name="" id="button">Talebi Gönder</button></td>
        </tr>

      </table>
    </form>
  </div>

</body>
</html>