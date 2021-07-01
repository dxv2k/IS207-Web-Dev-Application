<php 
?php> 
$soluong = $_GET["soluong"];

$sql_code = "SELECT hopdong.mahd as mahd, hopdong.tenhd as tenhd, MAX(hopdong.tongtien) as tongtien
             from hopdong, cthd 
             where hopdong.mahd = cthd.mahd
             GROUP BY cthd.mahd
             ORDER BY tongtien DESC";

$result = $connect->query($sql_code);

if($result->num_rows > 0)
{   
    $count = 0;
    while($row = $result->fetch_assoc())
    {   
        $count = $count + 1;
        if($count > $soluong)
        {
            break;
        }
        echo "<tr><td>" . $row['mahd'] . "</td><td>" . $row['tenhd'] . "</td><td>". $row['tongtien']."</td></tr>";
        
    }
}
