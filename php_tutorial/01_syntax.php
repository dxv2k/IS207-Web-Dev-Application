<html>
    <head>
        <title>PHP Syntax</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>PHP Syntax</h1>
            </div>
            <h2>Basic PHP syntax</h2>
            <p>A PHP script can be placed anywhere in the document</p><br>
            <p>A PHP script starts with <code>&lt;?php</code> and ends with <code>?&gt;</code></p><br>
            <p>The default file extension for PHP files is <code>.php</code></p><br>
            <p>Below, we have an example of simpe PHP file, with a PHP script that uses a built0in PHP function <code>echo</code> to output the text "Hello World!" on a web page:</p>

            <!-- PHP scritp using echo to output the text -->
            <p><code>PHP scirtp below:</code></p>
            <?php
            echo "Hello, this is php script message"
            ?>

            <h2>PHP Case Sensitivity</h2>
            <p>In PHP, keywords (e.g. <code>if</code>, <code>else</code>, <code>while</code>, <code>echo</code>, etc.), classes, functions, and user-defined functions are not case-sensitive.</p>
            <p>In the example below, all three <code>echo</code> statements are equal and legal</p>
            <!-- PHP scirtp show that keyword, classes, ... are not case-sensitive -->
            <p><code>PHP scirtp below:</code></p>
            <?php
            echo "Hello!<br>";
            ECHo "Hello!<br>";
            eCho "Hello!<br>";
            ?>

            <h3>Note</h3>
            <p>All variable names are case-sensitive!</p>
        </div>
    </body>
</html>