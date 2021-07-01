<!DOCTYPE html>
<html>

<head>
    <title>02 Thêm Hợp Đồng </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div>
        <h2>Thêm thông tin xe khách hàng</h2>
        <form action="#" method="post" >
            <div>
                <label for="makh">Mã khách hàng:</label>
                <select id="makh" name="makh">
                    <?php
                    include "./get_connection.php";
                    $sql = "SELECT * FROM khachhang";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_row()) {
                        echo "<option value='$row[0]'>$row[0]</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="mahd">Mã hợp đồng:</label>
                <input type="text" name="mahd" id="mahd" >
                <br> 
                <label for="tenhd">Tên hợp đồng:</label>
                <input type="text" name="tenhd" id="tenhd">
                <br> 
                <label for="tongtien">Tổng tiền:</label>
                <input type="text" name="tongtien" id="tongtien">
            </div>
            <button type="submit"  value="submit" name="them">Thêm</button>
        </form>
        <?php
        if (isset($_POST['them']) && $_POST['them'] === 'submit') {
            $sql_add = "INSERT INTO hopdong (MAHD, TENHD, NGAYLAP, MAKH, TONGTIEN) VALUES ('" . $_POST['mahd'] . "','" . $_POST['tenhd'] . "', NOW(), '" . $_POST['makh'] . "', '" . $_POST['tongtien'] . "')";
            if ($conn->query($sql_add) == true)
                echo "Inserted";
            else echo "Failed ";
            $conn->close();
        }
        ?>
</body>

</html>