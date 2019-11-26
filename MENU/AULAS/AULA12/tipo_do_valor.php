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
                <label>Digite um valor: </label> 
                <input name="mensagem">
                <br> <input type="submit" >
            </form>
<?php }?>

        <?php
if ($method == "POST") {
    $mensagem = $_POST["mensagem"];

    if (is_numeric($mensagem)) {

        $ehNumero = "numeral";
    } else {
        $ehNumero = "texto";
    }
    
    echo "O mensagem é  $ehNumero";
}

?>
        
        
        

        <br><br> <a href="index.html">Voltar</a><br>
        <a href="index.html">Home</a><br><br>
        <a href="../../../index.html">PAGINA PRINCIPAL</a>
    </body>
</html>
