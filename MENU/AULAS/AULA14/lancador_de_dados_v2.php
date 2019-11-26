<?php
$method = $_SERVER["REQUEST_METHOD"];
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if ($method == "GET") { ?>
            <form method="POST">
                <label>Digite um valor minino:</label>
                <input name="dado1">

                <label>Digite um valor maximo:</label>
                <input name="dado2">
                <br><input type="submit"><br>
            </form>

        <?php } ?>
        <?php
        if ($method == "POST") {
            $mi = $_POST["dado1"];
            $max = $_POST["dado2"];
            
            if (is_numeric($mi)) {
                echo"true ";
            } else {
                echo"false ";
            }
            
            if($method == "POST"){
            
            $min = $_POST["dado1"];
            $max = $_POST["dado2"];

            echo rand($min, $max);
            }
                          
        }
        ?>



        <br><br><a href="index.html">Voltar</a><br><br>
        <br><br><a href="../../../index.html"></a><br><br>
    </body>

</html>
