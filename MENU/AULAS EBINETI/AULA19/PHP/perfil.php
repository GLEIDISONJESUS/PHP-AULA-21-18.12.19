<?php

session_start();

if(isset($_SESSION["uPerfil"])== false){
    header("location: usuario.php");
    exit();
}
$method = $_POST["REQUEST_METHOD"];

if($method == "POST"){
    
    $emailAntigo = $uPerfil["email"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $lista = $_SESSION["lista"];
    
    for($i = 0; i < count($lista); $i++){
        
    if($lista[$i]["email"] == $emailAntigo){
            $u["email"] = $email;
            $u["senha"] = $senha;
            $uPerfil["email"] = $email;
            $uPerfil["senha"] = $senha;
            break;
        }
    }
    
    $_SESSION["lista"]= $lista;
    $_SESSION["$uPerfil"] = $uPerfil;
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
        <h1>Perfil</h1>
        
        <label>Senha:</label>
        <input type ="password" name="senha">
        <input type ="submit">
        <a href="ProcurarUsuario.php">Voltr</a>
    </body>
</html>
