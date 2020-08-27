<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
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
        <link rel="stylesheet" type="text/css" href="./assets/css/page1.css">

        <title>Quizz</title>

        
    <script type="text/javascript" language="javascript">
        var inicio=confirm('Bem-Vindo ao Quiz! Clique em OK para começar?');
        var sair = "<html><head><title>Voce nao quis participar</title></head><body>Obrigado pela sua resposta!<br></body></html>";
        if(inicio==false){document.write(sair);}
        else{ window.alert('Começou o Jogo! Clique em Ok abaixo para começar');

        //Inicio do quiz
        var certo = "<b>Correto!</b>"; var errado = "<b style='color:red;'>Errado!</b>";var o = new Array();
        var acertos=0; var erros=0; var respostas = new Array(); var p = new Array();var r = new Array();
        var t=3; //COLOQUE AQUI TOTAL DE PERGUNTAS DO QUIZ !!!!
        
        // LISTA DE PERGUNTAS
        p[1] = "Qual o único número primo que é par?";
        r[1] = 2;
        p[2] = "Quantos lados tem um quadrado?";
        r[2] = 4;
        p[3] = "Qual o dia da Independência?";
        r[3] = 7;

        //ADICIONE MAIS PERGUNTAS AQUI COPIANDO 2 EM 2 LINHAS: P[] = PERGUNTA R[] = RESPOSTA
        for(var i=1;i<=t;i++){o[i] = i;} //gera uma sequencia de t numeros
        for(var i=1;i<=3;i++)          //embaralha a sequencia 10 vezes
        {
        n=Math.round(t*(Math.random())); 
        m=Math.round(t*(Math.random()));
        if(m==0){m++;}
        if(n==0){n++;}
        var temp = o[n];
        o[n]=o[m];
        o[m]=temp;
        } 
        for(var i=1;i<=t;i++)
        {
        respostas[o[i]] = prompt(p[o[i]],"");
        if(respostas[o[i]]==r[o[i]]){respostas[o[i]]=certo;acertos++;}else{respostas[o[i]]=errado;erros++;}
        }

        //fim do quiz
        document.write("Javascript Quiz:<br><br>Suas respostas:<br><br>");
        document.write("<ol>");
        for(var i=1;i<=t;i++)
        {
        document.write("<li>"+respostas[o[i]]);}
        document.write("</ol>");
        document.write("<br>Total de acertos: "+acertos);
        document.write("<br>Total de erros: "+erros);
        document.write("<br><br><input type=button value='Respostas' Onclick=javascript:if(document.getElementById('rp').style.display=='none'){document.getElementById('rp').style.display='block';}else{document.getElementById('rp').style.display='none';}>");
        document.write("<br><div id='rp' class='rp' style='display:none;'><ol>");
        for(var i=1;i<=t;i++)
        { document.write("<li>"+p[o[i]]+"<br>R:"+r[o[i]]);}
        document.write("</ol></div>");
    }
    </script>
    </head>
    <body>
        <!--CONEXÃO COM A PAGE DE MENU FIXO-->
        <?php
                include("barramenu.php");
        ?>

        <div class="container">
            <div class="text-center" style="background:rgba(0,0,0,0.5); padding:16px 0;">
                <h1 style="color:#fff; font: 40px MuseoSans100; margin:0">Quizz perguntas e respostas</h1>
            </div> 
        </div>
    </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
    
</html>