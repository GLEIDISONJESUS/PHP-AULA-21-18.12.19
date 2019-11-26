
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Aprenda na prática a desenvolver um template moderno com propriedades avançadas do HTML5 e CSS3." />
        <title>Agency New - HTML e CSS Pro</title>


        <!-- FONT ICON -->
        <link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">

        <!--RESET-->	
        <link rel="stylesheet" type="text/css" href="reset.css" />

        <!-- ESTILOS -->  
        <link rel="stylesheet" href="style.css">
    <body>
        <form method="get" action="if else.php">
            <br><br>
            <?php
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
            $idade = date("Y") - $ano;
            $nome = $_GET["nome"];
            

            if ($idade < 16) {
                echo "Não vota. <br/>";
            } elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
                echo "Voto opcional. <br/>";
            } else {
                echo "Voto obrigatorio. <br/>";
            }


            echo "Voce nasceu em $ano e tem $idade anos, Seu nome é $nome <br><br>";
            ?>
            <?php
            $nome2 = $_GET["nome2"];
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $num3 = $_GET["num3"];
            $num4 = $_GET["num4"];

            $media = ($num1 + $num2 + $num3 + $num4) / 4;
            
            ?>
            <?php
             
            if ($media < 5) {
                echo "Aluno reprovado, a nota do aluno $nome2 foi de $media ";
            } 
            if($media>5 && $media <=7){
                echo "Aluno em recuperação, a nota do aluno $nome2 foi de $media ";
            }
            if($media >=7){
                echo "Aluno aprovado, a nota do aluno $nome foi de $media ";
                       
            }
            ?>


            <h1><a href="../../../index.html">home</a></h1>
            <a href="index.html">voltar</a>
    </body>

</html>
