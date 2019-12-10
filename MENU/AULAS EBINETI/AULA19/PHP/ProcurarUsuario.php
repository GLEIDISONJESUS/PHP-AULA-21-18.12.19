<?php 

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	
	session_start();
	
	if ( isset($_SESSION["lista"]) == false ) {
		$_SESSION["lista"] = array();
	}
	
	$lista = $_SESSION["lista"];
	
	$email = $_POST["email"];
	
	$uPerfil = NULL;
	$emailCadastrado = false;
	foreach ($lista as $u) {
		
		if ($u["email"] == $email) {
			$emailCadastrado = true;
			$uPerfil = $u;
			break;
		}
		
	}
	
	if ($emailCadastrado) {
		$_SESSION["uPerfil"] = $uPerfil;
		header("Location: perfil.php");
		exit();
	} 
}
?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Procurar | Usuários</title>
    </head>
    <body>
        <a href="Usuario.php">Voltar</a>

        <h1>Procure um usuário</h1>
        <form method="POST">
            <p>
                <label>E-mail: </label> <input name="email" />
            </p>
            <input type="submit" value="Procurar" />
            <?php if (isset($emailCadastrado) and $emailCadastrado == false) { ?>
                <p>* E-mail não cadastrado.</p>
            <?php } ?>
        </form>
    </body>
</html>
