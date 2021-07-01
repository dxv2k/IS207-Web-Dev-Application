<!DOCTYPE html>
<html>

<head>
    <title>01 Thêm Xe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <h2>Thêm khách hàng</h2>
        <form action="#" method="post" class="form-group">
            <div class="form-group">
                <!-- Ma xe -->
                <label for="id">Mã Xe:</label>
                <input type="text" name="id" id="id">
                <br>
                <!-- Ten xe -->
                <label for="name">Tên Xe:</label>
                <input type="name" name="name" id="name">
                <br>
                <!-- Mau xe -->
                <label for="color">Màu Xe:</label>
                <input type="text" name="color" id="color">
                <br>
                <!-- So cho ngoi-->
                <label for="seat">Số chỗ ngồi:</label>
                <input type="text" name="seat" id="seat">
                <br>
                <!-- Ten hang  -->
                <label for="brand">Tên hãng:</label>
                <input type="text" name="brand" id="brand">
            </div>
            <button type="submit" class="btn btn-default" value="in" name="ketqua">Thêm</button>
        </form>
        <?php
        if (isset($_POST['ketqua']) && $_POST['ketqua'] === 'in') {
            include "get_connection.php";
            $sql = "insert into xe (MAXE,TENXE,MAUXE,SOCHO,TENHANG) values ('" . $_POST['id'] . "','" . $_POST['name'] . "','" . $_POST['color'] . "','" . $_POST['seat'] . "','" . $_POST['brand'] . "')";
            if ($conn->query($sql) == true)
                echo "Inserted!";
            else echo "Failed";
        }
        ?>

</body>

</html>