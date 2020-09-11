<!--Verifica se foi logado e a senha autenticada se não foi ele não deixa acessar essa p�gina por ser restrita-->
<?php
    session_start();

    if (empty($_SESSION)) {
        echo "Acesso restrito.";
        die();
    }

    if ($_SESSION["logado"] != true) {
        echo "Acesso restrito.";
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="author" content="Letícia">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
        <!--Link de Vinculo com o CSS-->
        <link rel="stylesheet" type="text/css" href="page1.css">
        <title>Responder Quizz</title>
    </head>
    <body>
        
        <!--CONEXÃO COM A PAGE DE MENU FIXO-->
        <?php
        include("barramenu.php");
        ?>
    
        <div>
            <div class="text-center" style="background:rgba(0,0,0,0.5); padding:16px 0;">
                <h1>Responder Quizz</h1>
            </div>

            <div class="container2">
                <div id="mostrar" class="esconder">
                    <div class="perguntas">
                        <p>A pergunta vem aqui...</p>
                    </div>    
                
                    <div class="options">
                        <label for="pergunta">Opção1</label>
                        <input type="radio" name="pergunta" id="pergunta">
                        <br>
                        <label for="pergunta">Opção2</label>
                        <input type="radio" name="pergunta" id="pergunta">
                        <br>
                        <label for="pergunta">Opção3</label>
                        <input type="radio" name="pergunta" id="pergunta">
                    </div>
                </div>

                <div class="butt">
                    <button id="but-comecar" class="but-comecar">Iniciar</button>
                    <button id="but-conf" class="but-conf esconder">Confirmar</button>
                    <button id="but-proc" class="but-proc esconder"></button>
                </div>

            </div>
        </div>
    </body>
    <script src="script.js">

    </script>
</html>