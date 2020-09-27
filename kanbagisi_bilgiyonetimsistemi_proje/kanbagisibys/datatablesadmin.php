<?php

include('baglan.php');

$talepler = $db->query('SELECT * FROM talepler')->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>&hearts; KAN VER HAYAT OL &hearts;</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            margin-top:40px;
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

    <h1 align="center"><font color="#d30b11" face="tahoma">&hearts; KAN VER HAYAT OL &hearts;</font></h1>
    <table id="anasayfa">
        <tr>
        <td>
        <br>
        <a href="admin.php"><u><h6 align="center"><font color="#d30b11" face="tahoma"><b>Anasayfa</b></font></h6></u></a>
        </td>
        <td>&emsp;&emsp;</td>
        <td>
        <br>
        <a href="datatableskisisel.php"><u><h6 align="center"><font color="#d30b11" face="tahoma"><b>Taleplerim</b></font></h6></u></a>
        </td>
        <td>&emsp;&emsp;</td><td>&emsp;&emsp;</td>
        <td>
        <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to&su"><button style="font-size:16px" name="mail">Mail <i class="fa fa-envelope"></i></button></a>
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