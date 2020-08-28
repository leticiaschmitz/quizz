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
                <h1 style="color:#fff; font: 40px MuseoSans100; margin:0">Responder Quiz</h1>
            </div>
            <div >
            <div class="text-center" style="background:rgba(0,0,0,0.5); padding:10px 0;">
                <h1 style="color:#fff; font: 40px MuseoSans100; margin:0">Formulário</h1>
            </div>
            
            <!--ESSA PARTE DO CÓDIGO FUNCIONAR NA SESSION_STORAGE-->
            <form>
                <br>
                <div>
                    <input type="text" id="questao1" placeholder="Qual a cidade sede da UNIDAVI?" style="width: 20em"/>
                </div>
                <div>
                    <input type="text" id="questao2" value=""placeholder="Qual seu nome?" style="width: 20em"/>
                </div>
            </form>

            <button id="bt-enviar" onclick="salvarForm()">Enviar</button>

            
            <div id="page-wrap">
            <h1>Quiz</h1>
            <form action="processa.php" method="post" id="quiz">
                <ol>
                    <li>
                        <h3>Qual sua comida preferida?</h3>
                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                            <label for="question-1-answers-A">A) Strogonoff </label>
                        </div>
                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                            <label for="question-1-answers-B">B) Carne Assada</label>
                        </div>
                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                            <label for="question-1-answers-C">C) Batata Frita</label>
                        </div>
                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                            <label for="question-1-answers-D">D) Sushi</label>
                        </div>
                    </li>

                    <li>
                        <h3>Qual o melhor destino para um final de semana?</h3>
                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                            <label for="question-2-answers-A">A) Praia</label>
                        </div>

                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                            <label for="question-2-answers-B">B) Campo</label>
                        </div>
                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                            <label for="question-2-answers-C">C) Montanhas</label>
                        </div>
                    </li>
                </ol>
                <input type="reset" value="Limpar" />
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
            
            cad = document.getElementById('question-2-answers-A').value + ';' + document.getElementById('question-2-answers-B').value + ';' + document.getElementById('question-2-answers-C').value ;
            sessionStorage.setItem("cad_"+sessionStorage.cont,cad);
        }
    </script>
</html>