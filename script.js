function comecarJogo() {

}

function pergunta() {
    
}

function salvarForm(){
    if(typeof(Storage)!== "undefined") 
    {
        if (sessionStorage.cont) {
            sessionStorage.cont = Number(sessionStorage.cont)+1;
        } else {
            sessionStorage.cont = 1;
        }
    }
    const cad = document.getElementById('questao1').value + ';' + document.getElementById('questao2').value ;
    sessionStorage.setItem("cad_"+sessionStorage.cont,cad);
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