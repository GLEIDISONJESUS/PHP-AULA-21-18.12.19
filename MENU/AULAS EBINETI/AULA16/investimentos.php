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
        <?php
        if ($method == "POST") {
            $inicial = $_POST["Aporte"];
            $Mensal = $_POST["mensal"];
            $Taxa = $_POST["taxa"];
            $Meses = $_POST["meses"];
            $soma = 0;

            for ($i = 1; $i < $Meses; $i++) {
                $soma = $soma + pow(1 + $Taxa, $i);
            }
            $valor = $inicial * pow(1 + $Taxa, $Meses) + $soma * $Mensal;

            echo"O valor total é $valor";
        }
        ?>




        <br><br><form method="POST">
            <label>Aporte inicial</label>
            <input name ="Aporte">
            <br><br><labe>Aporte mensal</labe>
            <input name="mensal">
            <br><br><label>Taxa de juros ao mês</label>
            <input name ="taxa">
            <br><br><label>Meses de investimentos</label>
            <input name ="meses">
            <br><br> <input type="submit">
        </form>


        <a href="index.html">Voltar</a><br><br>
    </body>
</html>
