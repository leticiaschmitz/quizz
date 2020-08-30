function pergunta() {
    var inicio=confirm('Bem-Vindo ao Quiz! Clique em OK para começar!');
    var sair = "<html><head><title>Voce nao quis participar</title></head><body>Obrigado pela sua resposta!<br></body></html>";
    if(inicio==false){document.write(sair);}
    else{ window.alert('Começou o Jogo! Clique em OK para continuar!');

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
}