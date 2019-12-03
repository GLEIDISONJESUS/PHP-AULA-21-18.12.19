<?php
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    $minimo = $_POST["minino"];
    $maximo = $_POST["maximo"];
    $nDezenas = $_POST["nDezenas"];
    $sorteados = array();

    for ($i = 0; $i < $nDezenas; $i++) {

        $x = false;
        while ($x == false) {

            //Criação da variavel de numeros randomicos
            $rand = rand($minimo, $maximo);

            if (in_array($rand, $sorteados) == false) {
                $sorteados[] = $rand;
                $x = true;
            }
        }
        sort($sorteados);
    }
}
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
        <h1>Loteria</h1>

        <! --  Inicio criaçao de formulario --!>
        <form method="POST">
            <p>
                <label>Minimo:</label>
                <input name="minino"/>
            </p> 
            <p>
                <label>Maximo:</label>
                <input name="maximo"/>
            </p>
            <label>Quantidade de dezenas sorteadas</label>
            <input name="nDezenas"/>
            <p>

            </p>
            <input type="submit" value="Sortear"/>
            <! -- Fim criaçao de formulario  --!>
        </form>
        <! -- Inicio mostrar dezenas  --!>
        <?php if ($method == "POST") { ?>
            <h2>Dezenas Sorteadas:</h2>
            <p>
                <?php echo implode(" | ", $sorteados); ?>
            </p>

        <?php } ?>
        <! -- Fim  mostrar dezenas  --!>
        
        <h2>Com Foreach</h2>
        <?php foreach($sorteados as $valor) {?>
        
        <p>
            <?php echo $valor; ?>
        </p>
        <?php } ?>

        <p>
            <a href="LoteriaSorteio.php">Voltar</a>
            <a href="../../../index.html">Home</a> 
        </p>

    </body>
</html>
