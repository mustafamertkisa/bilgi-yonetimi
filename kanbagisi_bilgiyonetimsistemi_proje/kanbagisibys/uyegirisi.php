<?php
  include('baglan.php')
?>
<?php
    session_start();
    if (isset($_SESSION['user'])) {
        echo "Giriş yapmışsın. (".$_SESSION['user']['uyeid'].")";
    }else {
        echo "Giriş yapılmamış.";
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>&hearts; KAN VER HAYAT OL &hearts;</title>
  <style>
    body{

      background-image: url(gorseller/slider3.jpg);
      background-repeat:no-repeat;
      background-size: cover;

    }
    #girisform {
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
    #butongiris {width:94%; height: 30px; background-color: #d30b11; cursor: pointer; color: #ffff;}

    table.ortala {
    margin-left:auto; 
    margin-right:auto;
    margin-top: 10px;
    }

  </style>
</head>
<body>

  <div id = "girisform" align:'center'>
    <form action="islemgiris.php" method="POST">
      <table class="ortala">
        <tr>
          <td><h4 align="center"><font color="#d30b11" face="tahoma"><br> <i>Hoşgeldiniz</i>  <br><br> &hearts; KAN VER HAYAT OL &hearts; <hr></font></h4></p></td>
        </tr>
        <tr>
          <td><input type="email" name="uyemail" placeholder="E-Posta adresinizi giriniz" required></td>
        </tr>
        <tr>
          <td><input type="password" name="uyesifre" placeholder="Parolanızı giriniz" required><br><br></td>
        </tr>
        <tr>
          <td><button type="submit" name="" id="butongiris">Giriş Yap</button></td>
        </tr>

      </table>
    </form>
  </div>

</body>
</html>
