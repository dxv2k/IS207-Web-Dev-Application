<!DOCTYPE html>
<html>

<head>
    <title>05 Cập Nhật</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <h2>Cập Nhật Thông Tin Chi Tiết</h2>
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
            <button type="submit" class="btn btn-default" value="update" name="ketqua">Update</button>
        </form>
        <?php

        include "get_connection.php";
        if (isset($_POST['ketqua']) && $_POST['ketqua'] === 'update') {

            $maxe = $_POST['id'];
            $tenxe = $_POST['name'];
            $mauxe = $_POST['color'];
            $socho = $_POST['seat'];
            $tenhang = $_POST['brand'];

            $sql = "UPDATE xe SET maxe='$maxe', tenxe='$tenxe', mauxe='$mauxe', socho='$socho', tenhang='$tenhang' WHERE maxe='$maxe' ";

            if ($conn->query($sql) == true) {
                echo "Inserted!";
            } else {
                echo "Failed";            
            }
        }
        ?>



</body>

</html>