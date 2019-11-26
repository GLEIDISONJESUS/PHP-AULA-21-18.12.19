<?php
$method = $_SERVER["REQUEST_METHOD"];
$ehPost = $method == "POST";
if ($ehPost) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $soma = $num1 + $num2;
    $sub = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;
}
?>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<title>Calculadora</title>
</head>
<body>
	<h1>Calculadora</h1>
	<form action="" method="post">
		<p>
			<label>Número 1: </label> <input name="num1" />
		</p>
		<p>
			<label>Número 2: </label> <input name="num2" />
		</p>
		<input type="submit" value="Calcular" />
	</form>

	<?php if($ehPost) { ?>
	<p>Número 1: <?php echo $num1; ?></p>
	<p>Número 2: <?php echo $num2; ?></p>

	<p>Soma = <?php echo $soma; ?></p>
	<p>Sub 	= <?php echo $sub; ?></p>
	<p>Mult = <?php echo $mult; ?></p>
	<p>Div 	= <?php echo $div; ?></p>
	<?php } ?>
</body>
</html>