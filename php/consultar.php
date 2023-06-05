<?php 
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senhaServidor = "usbw";
    $banco = "cadastro";

    $conexao = mysqli_connect($servidor, $usuario, $senhaServidor, $banco);

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM tb_usuario WHERE email = '$email' ";
    $result = mysqli_query($conexao, $sql);
    

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $sqlSenha = $row['senha'];
        if($senha == $sqlSenha) {
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
                <title>Bem-vindo!</title>
            </head>
            <body>
                <h1>Olá!</h1>
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
                <title>Senha errada</title>
            </head>
            <body>
                <h1>Poxa!</h1>
                <p>Confira a senha e tente novamente! :)</p>
            </body>
            </html>

            <?php
        }
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
                <title>Inexistente</title>
            </head>
            <body>
                <h1>Hmmm...</h1>
                <p>Não encontrei nada aqui. Que tal criar uma <a href="index.html">conta</a>?</p>
            </body>
            </html>

        <?php
    }    
?>