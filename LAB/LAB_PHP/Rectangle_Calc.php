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
            <h1>Tính diện tích và chu vi hình chữ nhật</h1>
        </div>
        <form action="#" method="get" class="form-group">
            <div class="form-group">
                <label for="chieu_dai">Chiều dài:</label>
                <input type="text" name="height" id="chieu_dai" class="form-control">
            </div>
            <div class="form-group">
                <label for="chieu_rong">Chiều rộng:</label>
                <input type="text" name="width" id="chieu_rong" class="form-control">
            </div>
            <button type="submit" class="btn btn-default" value="in" name="input_data">Tính</button>
        </form>
        <?php
            class Rec{
                private $width;
                private $height;
                public function __construct($width, $height){
                    $this->width = $width;
                    $this->height = $height;
                }
                public function Area(){
                    echo "Dien tich là: " .$this->width * $this->height;
                }
                public function Perimeter(){
                    echo "Chu vi là: " .($this->width + $this->height)*2;
                }
            }
            if (isset($_GET['input_data'])&&$_GET['input_data'] === 'in'){
                $result = new Rec((float)$_GET['width'], (float)$_GET['height']);
                $result->Area();
                echo "<br>";
                $result->Perimeter();
            }
        ?>
    </div>
    </body>
</html>