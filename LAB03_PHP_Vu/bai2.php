<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bai 2 - PHP</title>
    </head>
    <body>
        
    <form method="get" action="#"> 
    <table border="1" cellspacing="0"> 

    <tr><td>Ngay</td><td> 
    <input type="input" name="ngay"></td></tr> 
   
    <tr><td>Thang</td><td> 
    <input type="input" name="thang"></td></tr> 

    <tr><td>Nam</td><td> 
    <input type="input" name="nam"></td></tr> 

    <tr><td colspan="2" align="center">
        <input type="Submit" value="Tong" name="Submit"> 
    </td></tr> 
    </table> 
    </form> 
        <?php
            if (isset($_GET['Submit'])&&$_GET['Submit'] === 'Tong') {
                echo "Hello <br>"; 
                $ngay=$_GET['ngay'];
                $thang = $_GET['thang'];
                $nam = $_GET['nam'];
                $s=$ngay;
                for($i=1;$i<$thang;$i++)
                    {
                    switch($i)
                        {
                            case 1: case 3: case 5: case 7: case 8:
                            case 10: case 12:
                            $s=$s+31;
                            break;
                            case 4: case 6: case 9: case 11:
                            $s=$s+30;
                            break;
                            case 2:
                            if($nam%4==0)
                            $s = $s+29;
                            else
                            $s = $s+28;
                            break;
                        }
                    }
                for($i=1970;$i<$nam;$i++)
                    {
                        if($i%4==0)
                        $s=$s+366;
                        else
                        $s=$s+365;
                    }
                $s=$s-1;
                $du = $s%7;
                $thu = array("Thứ 5","Thứ 6","Thứ 7", "chủ nhật","Thứ 2","Thứ 3","Thứ 4");
                echo "<p> Ngày ".$ngay." tháng ".$thang." năm ".$nam." là ngày ".$thu[$du]. "</p>";    
            }
        ?>
    </body>
</html>