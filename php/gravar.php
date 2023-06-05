<?php
    $nome = $_POST["nomeUsuario"];
    $email = $_POST["emailUsuario"];
    $senha = $_POST["senhaUsuario"];

    $servidor = "127.0.0.1";
    $usuario = "root";
    $senhaServidor = "usbw";
    $banco = "cadastro";

    $conexao = mysqli_connect($servidor, $usuario, $senhaServidor, $banco);

    $query = "SELECT * FROM tb_usuario WHERE email = '$email'";
    $result = mysqli_query($conexao, $query);
    if (mysqli_num_rows($result) > 0) {
        ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

                    h1 {
                        text-align: center;
                        font-family: 'Poopins', sans-serif;
                        font-size: 40px;
                        margin-top: 300px;
                    }

                    p {
                        text-align: center;
                        font-family: 'Poopins', sans-serif;
                        font-size: 25px;
                    }
                </style>
                <title>Email Existente</title>
            </head>
            <body>
                <h1>Opa...</h1>
                <p>O e-mail já está em uso. Tente entrar com a sua <a href="index.html">conta</a>!</p>
            </body>
            </html>

        <?php
        
    } else {
        $query = "INSERT INTO tb_usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if (mysqli_query($conexao, $query)) {
            ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

                    h1 {
                        text-align: center;
                        font-family: 'Poopins', sans-serif;
                        font-size: 40px;
                        margin-top: 300px;
                    }

                    p {
                        text-align: center;
                        font-family: 'Poopins', sans-serif;
                        font-size: 25px;
                    }
                </style>
                <title>Boa!</title>
            </head>
            <body>
                <h1>Que bom ter você aqui!</h1>
                <p>Seja muito bem-vindo(a)! :)</p>
            </body>
            </html>

        <?php
        } else {
            ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

                    h1 {
                        text-align: center;
                        font-family: 'Poopins', sans-serif;
                        font-size: 40px;
                        margin-top: 300px;
                    }

                    p {
                        text-align: center;
                        font-family: 'Poopins', sans-serif;
                        font-size: 25px;
                    }
                </style>
                <title>Erro</title>
            </head>
            <body>
                <h1>Ué...</h1>
                <p>Parece que aconteceu algum imprevisto. Tente novamente.</p>
            </body>
            </html>

        <?php
        }
    }

    mysqli_close($conexao);
?>