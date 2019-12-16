<?php
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST") {
    // Cadastrar novo usuário
    // Pegar email e senha que vieram na requisição
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    // Abrir conexão com o MySQL
    $link = mysqli_connect("localhost", "root", "");

    $linkErro = mysqli_connect_errno();

    if ($linkErro == 0) {

        $resultado = mysqli_query($link, "SELECT * FROM cadastro_usuarios2.usuario WHERE email = 'email'");

        if ($resultado) {

            var_dump($resultado->num_rows == 0);
            {

                $resultado = mysqli_query($link, "INSERT INTO cadastro_usuarios2.usuario");
            }
            if ($resultado) {
                $rowsAffected = mysqli_affected_rows($link);

                if ($rowsAffected > 0) {
                    $mensagem = "Cadastro feito com sucesso!";
                }
            }
        }
    }


    // Enviar comando SQL e guardar a resposta do MySQL na variável $resposta
    $resposta = mysqli_query($link, "SELECT * FROM cadastro_usuarios2.usuario WHERE email = '$email'");
    // Se o número de linhas retornado for maior do 0, significa que o email
    //		já foi utilizado para fazer um cadastro
    // Senão, prosseguir com o cadastro
    if ($resposta->num_rows > 0) {
        $msg = "E-mail já cadastrado. Por favor, informe outro e-mail";
    } else {

        // Enviar o comando SQL de INSERT e guardar a resposta em $resposta
        $resposta = mysqli_query($link, "INSERT INTO cadastro_usuarios2.usuario (email, senha) VALUES ('$email', '$senha')");
        // Se o valor da $resposta for true, então cadastro foi feito com 
        //	sucesso
        // Senão, algo deu errado
        if ($resposta) {
            $msg = "Cadastro feito com sucesso!";
        } else {
            $msg = "Email já cadastrado. Cadastre outro email";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Cadastro | App Usuários</title>
    </head>
    <body>
        <a href="usuarios.php">Voltar</a>
        <h1>Cadastre um usuário</h1>
        <form method="POST" action="CadastrarUsuario.php">
            <p>
                <label>E-mail:</label> <input type="email" name="email" />
            </p>
            <p>
                <label>Senha:</label> <input type="password" name="senha" />
            </p>
            <input type="submit" value="Cadastrar" />
            <?php if (isset($msg)) { ?>
                <p><?php echo $msg; ?></p>
            <?php } ?>
        </form>

    </body>
</html>