//DOM
// URL - LOCATION
// "BOTAO DE VOLTAR" - HISTORY
// "SITE / CONTEUDO" - DOCUMENT 
//se innerText - apenas texto
// se innerHTML - texto e código


//window.location = ""

//document.getElementById('catalogo').innerHTML = '<h3>OI</h3>'
//document.querySelector('#catalogo').innerHTML = 'olá'

function registrarNome(){
    nome = document.querySelector('#inputNome').value
    document.querySelector('#catalogo').innerHTML =`
        <div id ="nomeDiv">
            Eu, ${nome}, sou desenvolvedor.
    `    
}