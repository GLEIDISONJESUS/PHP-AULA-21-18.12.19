<?php
$method = $_SERVER["REQUEST_METHOD"];


if ($method == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $link = mysqli_connect("localhost", "root", "");

    $resultado = mysqli_query($link, "INSERT INTO cadastro_usuarios2.usuario (email, senha) VALUES ('$email', '$senha')");

    if ($resultado) {
        var_dump($resultado);
        echo "funcionou";
    } else {
        echo "não funcionou";
        var_dump($resultado);
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
        <title>Cadastrar | App Usuarios</title>
    </head>
    <body>
        <h1>Cadastre um nono usuario</h1>
        <form method="POST" action="CadastrarUsuario.php">

            <p>
                <label>Email:</label>
                <input type="email" name="email">
            </p>
            <p>
                <label>Senha:</label>
                <input type="senha" name="senha">
            </p>
            <p>
                <input type="submit">
            </p>
          
               
          

        </form>
        <p>
            <a href="../Html/index.html">Voltar</a>    
        </p>

        <a href="../../../../index.html">Home</a>
    </body>
</html>
