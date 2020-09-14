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

        <div class="text-center h1" style="background:rgba(0,0,0,0.5); padding:16px 0;">
            <h1>Responder Quizz</h1>
        </div>

        <div class="container2">
            <div id="mostrar" class="esconder">
                <div id="perg"></div>

                <div id="options" class="options">
                    <button id="p1" class="but">OPCAO 1</button>
                    <button id="p2" class="but">OPCAO 2</button>
                    <button id="p3" class="but">OPCAO 3</button>
                    <button id="p4" class="but">OPCAO 4</button>
                </div>
            </div>

            <div class="butt">
                    <button id="but-comecar" class="but-comecar but">Iniciar</button>
                    <button id="but-prox" class="but-prox but esconder">Próxima</button>
            </div>  
        </div>

        <script src="script.js"></script>
    </body>
</html>