<html>
    <head>
        <title>Spleeter</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
    <div class="container">
        <div class="jumbotron">
            <h1>Spleeter</h1>
        </div>
        <h2><b>Input form</b></h2>
        <p>Điền thứ ngày tháng vào form bên dưới</p>
        <form action="#" method="post" class="form-group">
            <div class="form-group">
                <label for="input_audio">Input audio</label>
                <input type="file" class="form-control-file" id="input_audio" name="audio_in">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="stems_option" id="exampleRadios1" value="2stems" checked>
                <label class="form-check-label" for="radio1">
                    2 stems
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="stems_option" id="exampleRadios2" value="4stems">
                <label class="form-check-label" for="radio2">
                    4 stems
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="stems_option" id="exampleRadios3" value="5stems">
                <label class="form-check-label" for="radio3">
                    5 stems
                </label>
            </div>
            <button type="submit" class="btn btn-default" value="in" name="ketqua">Submit</button>
        </form>
        <?php

        ?> 
        <?php
            function debug_to_console($data) {
                $output = $data;
                if (is_array($output))
                    $output = implode(',', $output);
            
                echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
            }
            if (isset($_POST['ketqua']) && $_POST['ketqua'] === 'in') {
                // $audio_in = $_POST['audio_in'];
                // $stems_option = $_POST['stems_option'];
                debug_to_console("Button clicked");
                $code_exec = "/home/vinh/.local/share/virtualenvs/Spleeter-GayJGL5r/bin/python3 /opt/lampp/htdocs/IS207-Web-Dev-Application/Spleeter/seperate_audio.py";
                // $code_exec = "python3 /opt/lampp/htdocs/IS207-Web-Dev-Application/test.py";
                // " .$stems_option. " '" .$audio_in. "'";
                $output=null;
                $retval=null;
                // exec($code_exec, $output, $retval);
                $retval = shell_exec("/home/vinh/.local/share/virtualenvs/Spleeter-GayJGL5r/bin/python3 /opt/lampp/htdocs/IS207-Web-Dev-Application/Spleeter/seperate_audio.py", ); 
                echo "Returned with status $retval and output:\n";
                print_r($output);
                // echo "spleeter separate -o ./ -p spleeter:" .$stems_option. " '" .$audio_in. "'";

                debug_to_console($output);
            } 
                // $ngay=$_GET['ngay'];
                // $thang = $_GET['thang'];
                // $nam = $_GET['nam'];
                // $s=$ngay;
                // for($i=1;$i<$thang;$i++)
                //     {
                //     switch($i)
                //         {
                //             case 1: case 3: case 5: case 7: case 8:
                //             case 10: case 12:
                //             $s=$s+31;
                //             break;
                //             case 4: case 6: case 9: case 11:
                //             $s=$s+30;
                //             break;
                //             case 2:
                //             if($nam%4==0)
                //             $s = $s+29;
                //             else
                //             $s = $s+28;
                //             break;
                //         }
                //     }
                // for($i=1970;$i<$nam;$i++)
                //     {
                //         if($i%4==0)
                //         $s=$s+366;
                //         else
                //         $s=$s+365;
                //     }
                // $s=$s-1;
                // $du = $s%7;
                // $thu = array("Thứ 5","Thứ 6","Thứ 7", "chủ nhật","Thứ 2","Thứ 3","Thứ 4");
                // echo "<p> Ngày ".$ngay." tháng ".$thang." năm ".$nam." là ngày ".$thu[$du]. "</p>";    
            // }
        ?>
    </div>
    </body>
</html>