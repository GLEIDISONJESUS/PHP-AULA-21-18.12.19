
<!DOCTYPE html>

<html>
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT ICON -->
        <link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">


        <!-- ESTILOS --> 
        <link href="style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="content5">
            <h1>HOME</h1>
            <?php
            // Descobrir qual método foi utilizado na requisição
            $method = $_SERVER["REQUEST_METHOD"];
            $ehPost = $method == "POST";

            if ($ehPost) {
                //Números digitados pelo usuario        
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];

                //Validar os números

                if (is_numeric($num1) && is_numeric($num2)) {

                    $soma = $num1 + $num2;
                    $sub = $num1 - $num2;
                    $mult = $num1 * $num2;
                    $div = $num1 / $num2;
                } elseif ($num2 != 0) {
                    echo "O valor digitado tem que se diferente de zero";
                } else {
                    echo "Os dois caracteres digitados precisar ser numeral e diferente de zero";
                }
            }
            ?>
            <form method="POST">
                <label>Número: 1</label>
                <input name="num1"/>
                <label>Número: 2</label>
                <input name="num2"/>
                <br><br>
                <input type="submit"/>
            </form>
            <!--Mostrar resultados apenas se os valores forem válidos -->
            <h2>RESULTADO</h2>

            <?php if ($ehPost) { ?>
                <p><?php echo "O primeiro valor é $num1 e o segundo valor é $num2" ?></p>
                <?php } ?>
                <?php if ($ehPost) { ?>
                    <?php if (is_numeric($num1) && is_numeric($num2)) { ?>
                        <p>Subtração =  
                            <?php echo $sub ?> 
                        </p>
                        <p>Multiplicação =
                            <?php echo $mult ?> 
                        </p>
                        <p>Divisão =  
                            <?php echo $div ?> 
                        </p>
                    <?php } ?>
                <?php } ?>
            <br>   
            <h3><a href="newEmptyPHP.php">Voltar</a></h3>
            <a href="../../../index.html">PAGINA PRINCIPAL</a>
        </div>
    </body>
</html>    



