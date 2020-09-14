const iniciarBotao = document.getElementById('but-comecar')
const proximaBotao = document.getElementById('but-prox')
const divPerguntas = document.getElementById('mostrar')
const perguntaDiv  = document.getElementById('perg')
const respostaDiv  = document.getElementById('options')

let misturaPerguntas, perguntaAtual

iniciarBotao.addEventListener('click', comecarJogo);
proximaBotao.addEventListener('click', () => {
  perguntaAtual++
  proximaPergunta()
})

function comecarJogo() {
  iniciarBotao.classList.add('esconder')
  misturaPerguntas = perguntas.sort(() => Math.random() - .5)
  perguntaAtual = 0
  divPerguntas.classList.remove('esconder')
  proximaBotao.classList.remove('esconder')
  proximaPergunta()
}

function proximaPergunta() {
  resetStatus()
  mostrarPergunta(misturaPerguntas[perguntaAtual])
}

function mostrarPergunta(pergunta) {
  perguntaDiv.innerText = pergunta.pergunta
  pergunta.respostas.forEach(resposta => {
    const botao = document.createElement('button')
    botao.setAttribute('id',"resp")
    botao.innerText = resposta.texto
    botao.classList.add('but')
    if (resposta.certo) {
      botao.dataset.certo = resposta.certo
    }
    botao.addEventListener('click', selecionaResposta)
    respostaDiv.appendChild(botao)
  });
}

function resetStatus() {
  while (respostaDiv.firstChild) {
    respostaDiv.removeChild(respostaDiv.firstChild)
  }
}

function selecionaResposta(e) {
  const botaoSelecionado = e.target
  const correto = botaoSelecionado.dataset.certo
  setarStatus(document.body, correto)
  Array.from(respostaDiv.children).forEach(botao => {
    setarStatus(botao, botao.dataset.certo)
  })
  if (misturaPerguntas.length > perguntaAtual + 1) {
    proximaBotao.classList.remove('esconder')
  } else {
    iniciarBotao.innerText = 'Restart'
    iniciarBotao.classList.remove('esconder')
  }
}

function setarStatus(element, correto) {
  limparStatus(element)
  if (correto) {
    element.classList.add('certo')
    salvarForm(correto)
  } else {
    element.classList.add('errado')
  }
}

function limparStatus(element) {
  element.classList.remove('certo')
  element.classList.remove('errado')
}

const perguntas = [
  {
    pergunta: 'Quem descobriu o Brasil?',
    respostas: [
      { texto: 'Pedro Alvares Cabral', certo: true },
      { texto: 'João Pessoa', certo: false},
      { texto: 'Cristovao Colombu', certo: false},
      { texto: 'Rivaldo', certo: false}
    ]
  },
  {
    pergunta: 'Qual o dia da indepedência?',
    respostas: [
      { texto: '1', certo: false },
      { texto: '30', certo: false},
      { texto: '10', certo: false},
      { texto: '7', certo: true}
    ]
  },
  {
    pergunta: 'Qual a soma da raiz quadrada de 64 com 64?',
    respostas: [
      { texto: '0', certo: false },
      { texto: '72', certo: true},
      { texto: '8', certo: false},
      { texto: '64', certo: false}
    ]
  }
]

function salvarForm(botao){
    if(typeof(Storage)!== "undefined") 
    {
        if (sessionStorage.cont) {
            sessionStorage.cont = Number(sessionStorage.cont)+1;
        } else {
            sessionStorage.cont = 1;
        }
    }
    const val = botao//document.getElementById('resp').value;
    sessionStorage.setItem("val_"+sessionStorage.cont,val.value);
}

//SESSÃO 24H

function sessionGet(key) {
    //Pega o valor do dia
    let stringValue = window.sessionStorage.getItem(key);
      //Verifica se está vazio
      if (stringValue !== null) {
        //Joga o JSON em uma var
        let value = JSON.parse(stringValue);
          //Var Expira recebe a data
          let expirationDate = new Date(value.expirationDate);
          //Verifica se a data Expira é maior que a de hoje, se for retorna o valor
          if (expirationDate > new Date()) {
            return value.value
          } else {
            //Senão mata a sessão	
            window.sessionStorage.removeItem(key);
          }
      }
      return null;
  }
  
  function sessionSet(key, value, expirationInMin = 10) {
    //Pega a Var Expira	
    let expirationDate = new Date(new Date().getTime() + (60000 * expirationInMin));
      //Seta o JSON
      let newValue = {
      value: value,
      expirationDate: expirationDate.toISOString()
    }
    //Armazena na sessão
    window.sessionStorage.setItem(key, JSON.stringify(newValue));
  }

 //SESSÃO 24H 