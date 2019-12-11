<?php
session_start();
$login = $_SESSION["login"];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Usuários</title>
</head>
<body>
   
<a href="../HTML/index.html">Voltar</a>
<h1>Login</h1>
<form method="POST" action="Login.php">
	<p>
		<label>E-mail: </label>
		<input type="email" name="email" />
	</p>
	<p>
		<label>Senha: </label>
		<input type="password" name="senha" />
	</p>
	<input type="submit" value="Entrar" />

	<?php if ($login == false) {?>
	<p>* Email/senha inválidos.</p>
	<?php } ?>

</form>
</body>
</html> 
