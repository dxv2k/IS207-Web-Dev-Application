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
        <h2>Thêm khách hàng</h2>
        <form action="#" method="post" class="form-group">
            <div class="form-group">
                <label for="id">Mã khách hàng:</label>
                <input type="text" name="id" id="id" class="form-control" placeholder="KH01">
            </div>
            <div class="form-group">
                <label for="name">Họ tên khách hàng:</label>
                <input type="name" name="name" id="name" class="form-control" placeholder="Trần Anh Hùng">
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="ABC">
            </div>
            <div class="form-group">
                <label for="phone">Điện thoại:</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="09xxxxxxxx">
            </div>
            <button type="submit" class="btn btn-default" value="in" name="ketqua">Thêm</button>
        </form>
            <?php
            if (isset($_POST['ketqua'])&&$_POST['ketqua'] === 'in'){
                include "get_connection.php";
                $sql = "insert into khachhang (MAKH,HOTENKH,DIACHI, DIENTHOAI) values ('".$_POST['id']."','".$_POST['name']."','".$_POST['address']."','".$_POST['phone']."')";
                if ($conn->query($sql) == true)
                    echo "Inserted successfully";
                else echo "Failed";
            }
            ?>

    </body>
</html>