
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
                //Validar numero 1
                if (is_numeric($num1)) {
                    if (is_numeric($num2)) {
                        if ($num2 != 0) {
                            $soma = $num1 + $num2;
                            $sub = $num1 - $num2;
                            $mult = $num1 * $num2;
                            $div = $num1 + $num2;
                        } else {
                            echo " o numero 2 precisar se diferente de zero";
                        }
                    } else {
                        echo "o numero 2 precisar ser numeral";
                    }
                } else {
                    echo "O numero 1 precisa ser numeral";
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
                <?php if (is_numeric($num1)) { ?>
                    <?php if (is_numeric($num2)) { ?>
                        <?php if ($num2 != 0) { ?>
                            <p>Soma = 
                                <?php echo $soma ?>
                            </p>
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
                <?php } ?>            
            <?php } ?> <br>   
            <h3><a href="CALCULADORA.php">Voltar</a></h3>
            <a href="../../../index.html">PAGINA PRINCIPAL</a>
        </div>
    </body>
</html>    

