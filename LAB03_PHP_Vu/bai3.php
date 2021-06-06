<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bai 3 - PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <form method="get" action="#"> 
        Nhập tên cần tìm  <input type="text" name="tencantim"><br> 
        <input type="Submit" name="Tim" value="Tim"> 
    </form> 
        <?php 
            function InMang($array){ 
                foreach($array as $ten => $tuoi){ 
                    echo $ten."\t"$tuoi"<br>"; 
                }
            } 
            // function TimTen($array,$str){ 
            //     foreach ($array as $ten => $tuoi){ 
            //         if ($ten == $str){ 
            //             return true; 
            //         }
            //     }
            //     return false; 
            // }
            $ban=array("Tuan"=>21, "Tu"=>19, "Tam"=>22, "Tung"=>20); 
            if (isset($_GET['Tim']) && ($_GET['Tim']==="Tim")){ 
                echo $ban; 
            }
            //     if (TimTen($ban,$ten)=true){ 
            //         echo "Tim thay ten".$ten"trong mang <br>"; 
            //     }
            //     else { 
            //         echo "Tim khong thay <br>"; 
            //     }
            //     echo <h3> Xuat mang </h3>; 
            //     InMang($ban); 
            // } 
        ?>

    </body>
</html>