<?php

include('baglan.php');
session_start();

$uyeisim = $_SESSION['user']['uyead'];
$uyeisim = mb_strtoupper($uyeisim,"UTF-8");

$uyesoyisim = $_SESSION['user']['uyesoyad'];
$uyesoyisim = mb_strtoupper($uyesoyisim,"UTF-8");

$uyeno = $_SESSION['user']['uyeid'];
$talepler = $db->query("SELECT * FROM talepler where talepyazar = '$uyeno'")->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>&hearts; KAN VER HAYAT OL &hearts;</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.css"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.js"></script>

         <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
         <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
         <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script> 
         <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script> 
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
         <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script> 
         <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"/> 
        
    <style>
    
        #table{

            background-color: #FFFAFA;
            width: 80%;
            margin-left:auto; 
            margin-right:auto;
        
        }
        h1{
            margin-top:50px;
        }

        body {
            background-image: url(gorseller/slider2.jpg);
            background-repeat:no-repeat;
            background-size: cover;
        }
        #anasayfa{

            margin-left:auto; 
            margin-right:auto;

        }
    </style>

</head>
<body>
    
    <div>

    <h2 align="center"><font color="#d30b11" face="tahoma"><br><?php echo "$uyeisim $uyesoyisim" ?><h5>taleplerinizi bu ekrandan inceleyebilirsiniz.</h5></font></h2>
    <table id="anasayfa">
        <tr>
        <td>
        <br>
        <a href="admin.php"><u><h5 align="center"><font color="#d30b11" face="tahoma"><b>Anasayfa</b></font></h5></u></a>
        </td>
        <td>&emsp;&emsp;</td>
        <td>
        <br>
        <a href="datatablesadmin.php"><u><h5 align="center"><font color="#d30b11" face="tahoma"><b>Talepler</b></font></h5></u></a>
        </td>
        <td>&emsp;&emsp;</td><td>&emsp;&emsp;</td><td>&emsp;&emsp;</td>
        <td>
        <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to&su"><button style="font-size:14px" name="mail">Mail <i class="fa fa-envelope"></i></button></a>
        </td>
        </tr>
    </table>
    </div>

        <hr><br><br>
        
        <table id="table" class="table table-bordered">
            <thread>
                <tr>
                    <th>Talep Tarihi</th>
                    <th>Kan Grubu</th>
                    <th>Talep Konumu</th>
                    <th>Cinsiyet</th>
                    <th>İrtibat Tel</th>
                    <th>İrtibat İsim</th>
                    <th>Talep No</th>
                </tr>
            </thread>

            <tbody>
                <?php foreach($talepler as  $talep): ?>
                <tr>
                    <td><?= $talep['taleptarih'] ?></td>
                    <td><?= $talep['talepkangrubu'] ?></td>
                    <td><?= $talep['talepkonum'] ?></td>
                    <td><?= $talep['talepcinsiyet'] ?></td>
                    <td><?= $talep['taleptelefon'] ?></td>
                    <td><?= $talep['talepadsoyad'] ?></td>
                    <td><?= $talep['talepid'] ?></td>
                    <td>
                        <form action="verisil.php" method="POST">
                            <input type="hidden" name='silinecek' value="<?= $talep['talepid'] ?>">
                            <input type="submit" name='sil' value='Sil'>
                        </form>
                    </td>
               
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

       

  <script>
  
    $('#table').DataTable({
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.20/i18n/Turkish.json'
        
        }
        
    });

  </script>

</body>
</html>