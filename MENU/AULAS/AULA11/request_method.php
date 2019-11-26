<?php

$method = $_SERVER["REQUEST_METHOD"];

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
      
      if($method == "GET"){
        echo "Bem-vindo! Metodo GET";  
      }
      else{
          echo "Request feito com sucesso. Metodo POST";
      }
       ?> 
        
    </body>
</html>
