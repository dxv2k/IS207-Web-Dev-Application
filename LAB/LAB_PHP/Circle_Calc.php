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
            <h1>Tính diện tích và chu vi hình tròn</h1>
        </div>
        <h2><b>Đề bài</b></h2>
        <p>Tính diện tích, chu vi hình tròn bằng class</p><br>
        <form action="#" method="get" class="form-group">
            <div class="form-group">
                <label for="bankinh">Bán kính:</label>
                <input type="text" name="R" id="bankinh" class="form-control">
            </div>
            <button type="submit" class="btn btn-default" value="in" name="input_data">Submit</button>
        </form>
        <?php
            class Circle{
                private $radius;
                public function __construct($radius){
                    $this->radius = $radius;
                }
                public function Area(){
                    echo "Dien tich là: " .$this->radius**2*pi();
                }
                public function Perimeter(){
                    echo "Chu vi là: " .$this->radius*2*pi();
                }
            }
            if (isset($_GET['input_data'])&&$_GET['input_data'] === 'in'){
                $result = new Circle((float)$_GET['R']);
                $result->Area();
                echo "<br>";
                $result->Perimeter();
            }
        ?>
    </div>
    </body>
</html>