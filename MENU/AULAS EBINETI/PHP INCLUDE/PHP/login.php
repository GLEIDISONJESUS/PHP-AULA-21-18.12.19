<?php

include ("bancoDeDados.php");


$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario_login = array();
$usuario_login["email"] = $email;
$usuario_login["senha"] = $senha;



$sucesso = false;
foreach ($lista_usuarios as $u) {
    print_r($u);
    echo implode( " | ", $u);
    echo"<br>";

    if ($u["email"] == $usuario_login["email"] and $u["senha"] == $usuario_login["senha"]) {
        $sucesso = true;
        break;
    }
}

if ($sucesso == true) {
    header("location: ../HTML/homeUsuario.html");
} else {
    session_start();
    $_SESSION["login"] = false;
    header("location: Usuario.php");
     
}
