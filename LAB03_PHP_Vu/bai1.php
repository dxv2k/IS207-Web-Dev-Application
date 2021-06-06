<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Bai 1 - LAB 03</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="get" action="#"> 
            <input type="input" name="chieudai"><br><br> 
            <input type="input" name="chieurong"><br><br>  
            <input type="Submit" value="Tinh" name="Submit"><br> 
        </form> 
    <?php 
        if(isset($_GET['Submit']) && ($_GET['Submit']==="Tinh")) { 
            $dai = $_GET['chieudai']; 
            $rong = $_GET['chieurong']; 
            $dientich = (float)$dai * (float)$rong;  
            echo "$dai<br>"; 
            echo "$rong<br>"; 
            echo "$dientich<br>"; 
        }
    ?>


    </body>
</html>


