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
            $minimo = $_POST["minimo"];
            $maximo = $_POST["maximo"];
            $Vsoteado = $_POST["Vsorteado"];
            for ($i = 1; $i <= $Vsoteado; $i++) {
                $num = rand($minimo, $maximo);
                echo "O valores sorteados são nº $i é: $num <br><br>";
            }
        }
        ?>

        <br><br><form method="POST">
            <label>Digite o valor minino</label>
            <input name="minimo" type="number">
            <label>Digite o valor maximo</label>
            <input name ="maximo" type="number">
            <label>Quantos numeros serão sorteados</label>
            <input name ="Vsorteado" type="number">
            <input type="submit">
        </form>


        <a href="index.html">Voltar</a><br><br>
    </body>
</html>