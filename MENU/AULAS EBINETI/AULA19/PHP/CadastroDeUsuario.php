<?php
$method = $_SERVER["REQUEST_METHOD"];



if ($method == "POST") {
    //EU QUERO FAZER UM NOVO CADASTRO PARA ESSE USUARIO
    session_start();
    if (isset($_SESSION["Dlista"]) == false) {
        $_SESSION["Dlista"] = array();
    }

    $Dlista = $_SESSION["Dlista"];

    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $usuario = array();
    $usuario["email"] = $email;
    $usuario["senha"] = $senha;

    $emailCadastrado = false;
    foreach ($lista as $u) {
        if ($u["email"] == $usuario["email"]) {
            $emailCadastrado = true;
            break;
        }
    }
    if ($emailCadastrado == false) {
        $Dlista[] = $usuario;
        $_SESSION["Dlista"] = $Dlista;
        header("location: cadastro_sucesso.php");
        exit();
    }
}
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            <h1>App Usuarios</h1>
            <label>Email:</label>
            <input type ="email" name="email">
            <label>Senha:</label>
            <input type="password" name="senha">
            <input name="enviar" type="submit">

            <?php  if (isset($emailCadastrado) and $emailCadastrado == true){ ?>
            
           
            <?php }?>
            <p>Email já cadastrado. Tente novamente.
            </p>
          
        </form>

        <p>
            <a href="../HTML/index.html">Voltar</a>

        </p>


    </body>
</html>
