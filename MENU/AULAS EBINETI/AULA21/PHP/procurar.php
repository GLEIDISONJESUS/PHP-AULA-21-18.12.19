<?php 
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST") {
	
	$email = $_POST["email"];
	
	include('conexao.php');
	global $link;
	
	$resultado = mysqli_query($link, "SELECT * FROM cadastro_usuarios.usuario WHERE email = '$email'");
	
	if ($resultado) {
		
		$usuario = mysqli_fetch_assoc($resultado);
		
		session_start();
		
		$_SESSION["usuario"] = $usuario;
		
		header('Location: perfil.php');
		exit();
		
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Procurar | Cadastro de Usuários</title>
</head>
<body>
<a href="usuarios.php">Voltar</a>
<h1>Procure um usuário</h1>
<form method="post" action="procurar.php">
	<p>
		<label>E-mail: </label>
		<input type="email" name="email"/>
	</p>
	<input type="submit" value="Procurar" />
</form>
</body>
</html>