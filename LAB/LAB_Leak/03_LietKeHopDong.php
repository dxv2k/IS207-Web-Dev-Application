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
        <h2>Liệt kê hợp đồng</h2>

        <label for="sl">Nhập số lượng:</label>
        <input type="text" name="sl" id="sl" class="form-control" placeholder="2">
        <script>
            $("#sl").keydown(function(event) {
                var code = event.keyCode || event.which;
                if(code === 9) {
                    $("#text").html("<table class="table">");
                    $("#text").html("<tbody>");
                    var a = <?php
                        if ($result->num_rows > 0) {
                            include "get_connection.php";
                            $sql= ""
                            $result = $conn->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            //   echo "id: " . $row["MAHD"]. " - Name: " . $row["TENHD"]. " " . $row["lastname"]. "<br>";
                                echo "<tr> <td> ". $row["MAHD"]. "</td>";
                                echo "<td> ". $row["TENHD"]. "</td>";
                                echo "<td> ". $row["SOLUONGXE"]. "</td> </tr>";
                            }
                          } else {
                            echo "";
                          }
                    ?>;
                    $("#text").html("</tbody>");
                    $("#text").html("</table>");
                }
            });
        </script>

        <p id='text'></p>
            <?php
            // if (isset($_POST['ketqua'])&&$_POST['ketqua'] === 'in'){
                // include "get_connection.php";
                // $sql_add = "insert into hopdong (MAHD,TENHD, TONGTIEN, MAKH) values ('".$_POST['mahd']."','".$_POST['tenhd']."','".$_POST['tongtien']."','".$row['makh']."')";
                // if ($conn->query($sql_add) == true)
                //     echo "Inserted successfully";
                // else echo "Failed";
                // $conn->close();
            // }
            ?>
    </body>
</html>