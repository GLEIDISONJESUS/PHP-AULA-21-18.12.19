<?php
    
  $link = mysqli_connect("localhost", "root", "");

$resultado = mysqli_query($link, "SELECT * FROM cadastro_usuarios2.usuario") ; 

$usuarios = mysqli_affected_all($resultado, MSQLI_ASSOC);
    
    
    
    
 ?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="../../../../index.html">Home</a>
        
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>EMAIL</td>
                    <td>SENHA</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $u){?>
                <tr>
                    <td><?php echo $u["ID"];?></td>
              <td><?php echo $u["EMAIL"];?></td>  
               <td><?php echo $u["SENHA"];?></td>
                    
                </tr>
                <?php } ?>
               
            </tbody>
            
            
        </table>
     
        
        
        
        
    </body>
</html>
