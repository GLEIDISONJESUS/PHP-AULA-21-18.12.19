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

        <?php } ?>
        <?php
        if ($method == "POST") {
            $dado = $_POST["min"];
            $dado2 = $_POST["max"];

            if (is_numeric($dado)) {
                echo "valor minino $dado <br><br>";
            } else {
                echo "false $dado ";
            }
            if (is_numeric($dado2)) {
                echo "valor maximo $dado2   ";
            } else {
                echo "false $dado2";
            }
            if ($method == "POST") {
                $min = $_POST["min"];
                $max = $_POST["max"];

                $num = rand($min, $max);
                echo "<br><br> o valor sorteado é $num";
            }
        }
        ?> 
            <?php for ($i = 0; $i <= 0; $i++) { ?> 
            <form method="POST">
                <br><br><label>Digite um numero minino:</label> 
                <input name="min"><br><br>

                <label>Digite um numero maximo: </label> 
                <input name="max"  >
                <br> <input type="submit" >
                <br><br><br>
            </form>
  <?php } ?> 
        <br><br><a href="index.html">voltar</a><br><br>
        <a href="../../../index.html">Home</a>
    </body>
</html>
