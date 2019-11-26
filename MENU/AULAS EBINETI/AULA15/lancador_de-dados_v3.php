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
            $min = $_POST["min"];
            $max = $_POST["max"];
            $Vdados = $_POST["Vdados"];


            if (is_numeric($min)) {
                echo "Valor minino $min <br><br>";
            } else {
                echo "Valor minino não é numero $min, digite um numeral";
            }
            if (is_numeric($max)) {
                echo "Valor maxino $max <br><br>";
            } else {
                echo"Valor maximo não é numero $max, digite um numeral";
            }
            if (is_numeric($Vdados)) {
                echo "Valor digitado $Vdados <br><br>";
            } else {
                echo "Valor digitado não é numero ($Vdados), digite um numeral";
            }
            if ($method == "POST") {
                $min = $_POST["min"];
                $max = $_POST["max"];
                $Vdados = $_POST["Vdados"];

                for ($i = 1; $i <= $Vdados; $i++) {
                    $num = rand($min, $max);
                    echo "<br><br> O Valor do nº $i é:  $num";
                }
            }
        }
            ?>

                <br><br><form method="POST">
                    <label>Digite um valor minimo:</label>
                    <input name="min">
                    <label>Digite um valor maximo:</label>
                    <input name="max">
                    <label>Digite a quantidade de sorteios:</label>
                    <input name="Vdados">

                    <input type="submit">
                </form>
            
        <br><br><a href="index.html">voltar</a><br><br>
        <br><br><a href="../../../index.html">home</a>
    </body>
</html>
