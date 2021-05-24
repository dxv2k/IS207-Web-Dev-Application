<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainpage</title>

    <link rel="stylesheet" type="text/css" href="..\lib\dropzone.css" />
    <script type="text/javascript" src="..\lib\dropzone.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <div class="container">
        <h1> Put File here</h1>
        <div class="upload-div">
            <form action="upload.php" class="dropzone"></form>
        </div>
    </div>
    <br />
   <br />
   <div align="center">
    <button type="button" class="btn btn-info" id="submit-all">Upload</button>
   </div>
    <a href="logout.php">Logout</a>
</body>
</html>

<script>
//Disabling autoDiscover
Dropzone.autoDiscover = false;

$(function() {
    //Dropzone class
    var myDropzone = new Dropzone(".dropzone", {
        maxFilesize: 2,
        maxFiles: 1,
        autoProcessQueue: false
    });
    
    $('#submit-all').click(function(){           
        myDropzone.processQueue();
    });

    myDropzone.on("complete", function(){
    if(myDropzone.getQueuedFiles().length == 0 && myDropzone.getUploadingFiles().length == 0)
        {
        var _this = myDropzone;
        _this.removeAllFiles();
        }
    });
});
</script>