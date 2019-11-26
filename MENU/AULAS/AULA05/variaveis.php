<?php

//Criar uma variável
$titulo = "Dinâmico";
$numerico = 10;
$reais = 10.5;
$array[] = 10;
$array[] = 20;      
$array[] = 30;

?>


<!DOCTYPE html>

<html>
    <head>
        <title>HOME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT ICON -->
        <link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">


        <!-- ESTILOS -->  
        <link rel="stylesheet" href="style2.css">
  
    </head>
    <body>
        <div class="content4">
            <h1>Titulo: <?php echo $titulo; ?> </h1>        
            <a href="../../../index.html">PAGINA PRINCIPAL</a>
            <h2>Informações das variaveis</h2>
            <p>Titulo: <?php var_dump ($titulo); ?></p>
            <p>Numerico: <?php var_dump ($numerico); ?></p>
            <p>Array: <?php var_dump ($array); ?></p>
        </div>
    </body>
</html>
