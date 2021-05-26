<html>
<head>
    <title>PHP Assigment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="jumbotron">
        <h1>In ra thứ của một ngày</h1>
    </div>
    <h2><b>Đề bài</b></h2>
    <p>Thiết kế 3 texfield để nhập</p><br>
    <p>Tạo một nút submit, sau khi nhấn nút submit thì trang web in ra thứ của ngày người dùng nhập</p><br>
    <h2><b>Tạo form</b></h2>
    <p>Điền thứ ngày tháng vào form bên dưới</p>
    <form action="#" method="get" class="form-group">
        <div class="form-group">
            <label for="ngay">Ngày:</label>
            <input type="text" name="ngay" id="ngay" class="form-control">
        </div>
        <div class="form-group">
            <label for="thang">Tháng:</label>
            <input type="text" name="thang" id="thang" class="form-control">
        </div>
        <div class="form-group">
            <label for="nam">Năm:</label>
            <input type="text" name="nam" id="nam" class="form-control">
        </div>
        <button type="submit" class="btn btn-default" value="in" name="ketqua">Submit</button>
    </form>
    <?php
        if (isset($_GET['ketqua'])&&$_GET['ketqua'] === 'in') {
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
</div>
</body>
</html>