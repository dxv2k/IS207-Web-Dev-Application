<!DOCTYPE html>
<html>

<head>
    <title>04 Liệt Kê Xe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <h2>04 Liệt Kê Xe</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã hợp đồng</th>
                    <th>Tên hợp đồng</th>
                    <th>Mã khách hàng</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn">View</button><button class="btn">Delete</button></td>
                </tr>
            </tbody>
        </table>

        <p id='text'></p>
        <?php
        // if (isset($_POST['ketqua'])&&$_POST['ketqua'] === 'in'){
        // include "get_connection.php";
        // $sql_add = "insert into hopdong (MAHD,TENHD, TONGTIEN, MAKH) values ('".$_POST['mahd']."','".$_POST['tenhd']."','".$_POST['tongtien']."','".$row['makh']."')";
        // if ($conn->query($sql_add) == true)
        //     echo "Inserted successfully";
        // else echo "Failed";
        // $conn->close();
        // }
        ?>
</body>

</html>