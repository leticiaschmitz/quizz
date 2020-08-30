<!--Verifica se foi logado e a senha autenticada se não foi ele não deixa acessar essa p�gina por ser restrita--><?php

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

        <div class="container">
            <div class="text-center" style="background:rgba(0,0,0,0.5); padding:16px 0;">
                <h1 style="color:#fff; font: 40px MuseoSans100; margin:0" onclick="pergunta()">Responder Quizz</h1>
            </div>
            <div >
            <div class="text-center" style="background:rgba(0,0,0,0.5); padding:10px 0;">
                <h1 style="color:#fff; font: 40px MuseoSans100; margin:0">Formulário</h1>
            </div>
        
            <form>
                <br>
                <div>
                    <input type="text" id="questao1" placeholder="Qual a cidade sede da UNIDAVI?" style="width: 20em"/>
                </div>
                <div>
                    <input type="text" id="questao2" placeholder="Qual seu nome?" style="width: 20em"/>
                </div>

            </form>

            <button id="bt-enviar" onclick="salvarForm()">Enviar</button>

        </div>
        <form id="questionario" name ="questionario" method = "post" action="resposta.php">
        1) Observe o video abaixo, e assinale o que ele representa:
        <p>
        <label>
        <input type="radio" name="questao1" value="a" /> A) Melancia;</label>
        <br />
        <label>
        <input type="radio" name="questao1" value="b" /> B) Abobora;</label>
        <br />
        <label>
        <input type="radio" name="questao1" value="c" /> C) Abacate;</label>
        <br />
        <label>
        <input type="radio" name="questao1" value="d" /> D) Laranja.</label>
        <br />
        <br />
        
        <h5 class="font_1">1) Observe o video abaixo, e assinale o que ele representa:</h5>
        
        <label>
        <input type="radio" name="questao2" value="a" /> A) Melancia;</label>
        <br />
        <label>
        <input type="radio" name="questao2" value="b" /> B) Abobora;</label>
        <br />
        <label>
        <input type="radio" name="questao2" value="c" /> C) Abacate;</label>
        <br />
        <label>
        <input type="radio" name="questao2" value="d" /> D) Laranja.</label>
        <br />
        <br />
        
        <h5 class="font_1">1) Observe o video abaixo, e assinale o que ele representa:</h5>
        
        <label>
        <input type="radio" name="questao3" value="a" /> A) Melancia;</label>
        <br />
        <label>
        <input type="radio" name="questao3" value="b" /> B) Abobora;</label>
        <br />
        <label>
        <input type="radio" name="questao3" value="c" /> C) Abacate;</label>
        <br />
        <label>
        <input type="radio" name="questao3" value="d" /> D) Laranja.</label>
        <br />
        <br />
        <input type="submit" name="enviar" id = "enviar" value="Enviar" />
        </form> 

        
    </body>
    <script>
        function salvarForm(){
            if(typeof(Storage)!== "undefined")
                if (sessionStorage.cont) {
                    sessionStorage.cont = Number(sessionStorage.cont)+1;
                } else {
                    sessionStorage.cont = 1;
                }
            
            cad = document.getElementById('questao1').value + ';' + document.getElementById('questao2').value ;
            sessionStorage.setItem("cad_"+sessionStorage.cont,cad);
        }
    </script>
</html>