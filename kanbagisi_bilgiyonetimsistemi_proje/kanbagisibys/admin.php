<?php

include('baglan.php');
session_start();

$uyeisim = $_SESSION['user']['uyead'];
$uyeisim = mb_strtoupper($uyeisim,"UTF-8");

$uyesoyisim = $_SESSION['user']['uyesoyad'];
$uyesoyisim = mb_strtoupper($uyesoyisim,"UTF-8");
?>


<!DOCTYPE HTML>
<html>

<head>
  <title>&hearts; KAN VER HAYAT OL &hearts;</title>
  <meta charset="UTF-8">
  <meta name="description" content="kan bağışı bilgi yönetim sistemi" />
  <meta name="keywords" content="kan bağışı bilgi yönetim sistemi" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  
  <style>

      #talepbuton {width:80%; height: 60px; margin-top: 40px; background-color: #d30b11; cursor: pointer; color: #ffff;}

  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <a href="admin.php"><img src="gorseller/hayatol.png" height="200" alt="logo"/></a>
          <h2>Kan Bağışı Bilgi Yönetim Sistemi</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="admin.php">Anasayfa</a></li>
          <li><a href="talepet.php">Talep Oluştur</a></li>
          <li><a href="datatablesadmin.php">Talepler</a></li>
          <li><a href="datatableskisisel.php">Taleplerim</a></li>
          
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->

        <a href="talepet.php"><button id="talepbuton">TALEP OLUŞTUR</button></a>
        <a href="datatablesadmin.php"><button id="talepbuton">TALEPLER</button></a>
        <a href="datatableskisisel.php"><button id="talepbuton">TALEPLERİM</button></a>
        <a href="cikisyap.php"><button id="talepbuton">ÇIKIŞ YAP</button></a>
       
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <br>
        <h1><i><?php echo "$uyeisim $uyesoyisim" ?></i></h1><hr><br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/NMzlPNhkMu4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       <br>
       <br><br>
       <br><br><br><br><br><br>
       
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
        <h6><i><font color="white">METEHAN TUNCER & MUSTAFA MERT KISA</font></i></h6>
    </div>
  </div>
</body>
</html>
