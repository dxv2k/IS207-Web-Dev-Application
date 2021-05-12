<html>
    <head>
        <title>PHP Variables Scope</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container"> 
            <div class="jumbotron">
                <h1>PHP Variables Scope</h1>
            </div>
            <h2>Global and Local Scope</h2>
            <p>If we declare local, we must use that variable in local (Not Global), If we declare Globalm we must use that variable in Global</p>

            <?php
            $a=123; //Global Variable
            function Output() {
                $a = 321; //Local Variable
                echo "A(Local) variable is: $a <br>";
            }
            Output();
            echo "A(Global) variable is: $a";
            ?>

            <h2>PHP Global Keyword</h2>
            <p>The <code>global</code> keyword is used to access a global variable from within a funtion</p>
            <p>To do this, use the <code>global</code> keyword before the variables (inside the function):</p>
            <?php
            $x = 10;
            function Multiply5(){
                global $x;
                $x = $x * 5;
                echo $GLOBALS['x'];
            }
            Multiply5();
            ?>

            <h3>Store all global variables  in array</h3>
            <p>PHP also stores all global variables in an array called <code>$GLOBALS[index]</code>. The <code>index</code> holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.</p>
            <?php
            $a = 20;
            $b = 10;
            function sum(){
                $GLOBALS['b'] = $GLOBALS['b'] + $GLOBALS['a'];
            }
            sum();
            echo $b;
            ?>

            <h2>PHP The static keyword</h2>
            <p>Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.</p>
            <p>To do this, we use the <code>static</code> keyword when you first declare the variable:</p>
            <?php
            function minus(){
                static $x = 100;
                echo "$x <br>";
                $x--;
                echo "$x <br>";
            }
            minus();
            minus();
            ?>
        </div>
    </body>
</html>