<?php
$method = $_SERVER["REQUEST_METHOD"];

if( isset($_SESSION["lista"])== false){
    $_SESSION["lista"] = array();
    
}

$lista = $_SESSION["lista"];

$email = $_POST["email"];

$uPerfil = NULL;
$emailCadastrado = false;
foreach($lista as $u){
    if($uPerfil("email")==$email){
        $emailCadastrado = true;
        $u_procura = $u;
        break;
    }
}

if(($emailCadastrado)){
    $_SESSION["$uPerfil"]
    header("location: perfil.php");
    exit();
}else{
    
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
        <form method="POST">
            
        </form>
        <?php if(isse($emailCadastrado) and $emailCadastrado == false){?>
            
    </body>
</html>
