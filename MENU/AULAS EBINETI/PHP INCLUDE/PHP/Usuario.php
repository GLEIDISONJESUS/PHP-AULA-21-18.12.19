<?php

session_start();
$login = $_SESSION["login"];

if($login == false){
    echo"email/senha invalidos";
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
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <p>
            <label>Email:</label>
            <input type ="email" name="email">
            </p>
            <p>
                <label>Login:</label>
                <input type="password"  name="senha">
            </p>    
            <input type="submit" value="Entrar" >
            
            
        </form>
        <p>
        <a href="../../../../index.html">home</a>    
        </p>
        
        <p>
            
        <a href="../HTML/index.html">Voltar</a>    
        </p>
        
    </body>
</html>
