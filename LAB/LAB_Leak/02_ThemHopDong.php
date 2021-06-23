<!DOCTYPE html>
<html>
    <head>
        <title>LAB</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <h2>Thêm thông tin xe khách hàng</h2>
        <form action="#" method="post" class="form-group">
            <div class="form-select">
                <label for="makh">Mã khách hàng:</label>
                <select class="form-control" id="name" name="name">
                <?php
                    include "get_connection.php";
                    // $sql = "SELECT MAKH FROM khachhang";
                    // $result = $conn -> query($sql);
                    // while($row = $result -> fetch_array()){
                    //     echo "<option> " .$row['MAKH']. "</option>" ;
                    // }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="mahd">Mã hợp đồng:</label>
                <input type="text" name="mahd" id="mahd" class="form-control" placeholder="HD10">
            </div>
            <div class="form-group">
                <label for="tenhd">Tên hợp đồng:</label>
                <input type="text" name="tenhd" id="tenhd" class="form-control" placeholder="Đám cưới">
            </div>
            <div class="form-group">
                <label for="tongtien">Tổng tiền:</label>
                <input type="text" name="tongtien" id="tongtien" class="form-control" placeholder="100000">
            </div>
            <button type="submit" class="btn btn-default" value="in" name="ketqua">Thêm</button>
        </form>
            <?php
            if (isset($_POST['ketqua'])&&$_POST['ketqua'] === 'in'){
                // include "get_connection.php";
                // $sql_add = "insert into hopdong (MAHD,TENHD, TONGTIEN, MAKH) values ('".$_POST['mahd']."','".$_POST['tenhd']."','".$_POST['tongtien']."','".$row['makh']."')";
                // if ($conn->query($sql_add) == true)
                //     echo "Inserted successfully";
                // else echo "Failed";
                // $conn->close();
            }
            ?>
    </body>
</html>