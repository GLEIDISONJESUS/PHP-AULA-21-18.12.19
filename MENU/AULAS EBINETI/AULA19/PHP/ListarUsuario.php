<?php
$method = $_SERVER["REQUEST_METHOD"];

session_start();

if (isset($_SESSION["lista"]) == false) {
    $_SESSION["lista"] = array();
}
$lista = $_SESSION["lista"];
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
        <h1>Usuario Cadastrados</h1>
        <table>    
            <thead>
                <tr>
                    <td>Email:</td>
                    <td>Senha:</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $u) { ?>
                    <tr>
                        <td><?php echo $u["email"]; ?></td>
                        <td><?php echo $u["senha"]; ?></td>
                    </tr>
            
                <?php } ?>
            </tbody>
        </table>


        <p>
            <a href="../HTML/index.html">Voltar</a>
        </p>
        <p>
            <a href="../../../../index.html">Home</a>
        </p>
    </body>
</html>
