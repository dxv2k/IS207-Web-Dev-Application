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
                <label for="name">Họ tên khách hàng:</label>
                <select class="form-control" id="name" name="name">
                <?php
                    include "get_connection.php";
                    $sql = "SELECT HOTENKH FROM khachhang";
                    $result = $conn -> query($sql);
                    while($row = $result -> fetch_array()){
                        echo "<option> " .$row['HOTENKH']. "</option>" ;
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="soxe">Số xe:</label>
                <input type="text" name="soxe" id="soxe" class="form-control" placeholder="51H-XXX.XX">
            </div>
            <div class="form-group">
                <label for="hangxe">Hãng xe:</label>
                <select multiple class="form-control" id="hangxe" name="hangxe">
                    <option>Toyota</option>
                    <option>BMW</option>
                    <option>Audi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="namsx">Năm sản xuất:</label>
                <input type="text" name="namsx" id="namsx" class="form-control" placeholder="2020">
            </div>
            <button type="submit" class="btn btn-default" value="in" name="ketqua">Thêm</button>
        </form>
            <?php
            if (isset($_POST['ketqua'])&&$_POST['ketqua'] === 'in'){
                include "get_connection.php";
                $sql = "SELECT MAKH, HOTENKH FROM khachhang WHERE HOTENKH='" . $_POST["name"] . "'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                // echo $row['MAKH'];
                $sql_add = "insert into xe (SOXE,HANGXE,NAMSX, MAKH) values ('".$_POST['soxe']."','".$_POST['hangxe']."','".$_POST['namsx']."','".$row['MAKH']."')";
                if ($conn->query($sql_add) == true)
                    echo "Inserted successfully";
                else echo "Failed";
                $conn->close();
            }
            ?>
    </body>
</html>