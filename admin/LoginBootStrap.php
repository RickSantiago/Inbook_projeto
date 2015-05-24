<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />

        <title>Acesse com seu Login aqui!</title>

        <link rel="stylesheet" type="text/css" href="../admin/Login/css/style.css"> 
        <script type="text/javascript" src="../admin/Login/js/jquery-1.11.2.min.js"></script>
        <script src="../admin/Login/js/jquery-1.9.0.js" type="text/javascript"></script>
        <script type="text/javascript">

        </script>
        <style>	
            /*@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);*/
            body 
            {
                background: #7f9b4e url(../admin/Login/_backgound/2ae6f71504ec7a3522aec68425c304f0.jpg) no-repeat center top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
            }
            .container > header h1,
            .container > header h2 
            {
                color: #fff;
                text-shadow: 0 1px 1px rgba(0,0,0,0.7);
            }
        </style>
    </head>
    <body>
        <div id="header">
        </div>
        <div class="container">
            <header>
                <h1> Acesse ao <strong> Inbook </strong> Aqui </h1>
                <h2>Atribua, Contribua e Desenvolva</h2>

            </header>

            <section class="main">
                <form class="form-4" action="../Controller/ValidarLogin.php" method="post">
                    <h1>Login</h1>
                    <p>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email" autofocus="">
                    </p>
                    <p>
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Senha" autofocus=""> 
                    </p>
                    <p>
                        <input  type="submit" name="botaook" id="botaook" value="Tudo Certo!">                               
                    </p>	
                </form> 
                <div class="codrops-top">
                <a href="Registro.php">
                    <strong>&laquo; Não é Registrado? Clique Aqui! </strong>
                </a>

                </div> </br></br>
                <?php
                if (isset($_GET['acao']) and $_GET['acao'] == 'erro') {
                    echo '<div class="alert branco"> ';
                    echo '<button type="button" class="close" data-dismiss="alert">x</button>';
                    echo '<strong>Atenção</strong> ERRO ao autenticar senha ou email inválido';

                    echo '</div>';
                } else 
                    {
                    echo 'não entrou';
                }
                ?>        
            </section>
        </div>   



