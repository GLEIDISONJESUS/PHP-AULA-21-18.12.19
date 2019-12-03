<?php
include ("bancoDeDados.php");


$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario_login = array();
$usuario_login["email"] = $email;
$usuario_login["senha"] = $senha;

echo "funcionou";

