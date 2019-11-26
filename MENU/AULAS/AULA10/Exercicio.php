<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])? $_GET["oper"]:1;
        switch ($o){
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n); // $n ^(1/2);
                
        } 
        
        ?>
        <h2><?php   echo "O resultado da operação solicitado foi $r"; ?></h2>
    </body>
    <a href="index.html">Voltar</a>
    
</html>