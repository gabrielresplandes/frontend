function explicacao1(){

    escolha = confirm("DESEJA RODAR TRUE OU FALSE?")
    alert(escolha)

    if (escolha){
    //console.log("FIZ O SE")
    alert("VOCE ESCOLHEU TRUE")
    }else{
    //console.log("SENÃO")
    alert("VOCE ESCOLHEU FALSE")
    }
}

function explicacao2(){
    alert("SEJA BEM-VINDO(A) A LOJA!")
    escolha = prompt('A) Bolo no Pote R$ 10, B) Açaí R$ 20, C) Torta R$ 15')

    switch(escolha){
    case 'A':
        alert('Você escolheu Bolo no Pote')
        break
    case 'B':
        alert('Você escolheu Açaí')
        break
    case 'C':
        alert('Você escolheu Torta')
        break
    }
}

function explicacao3(){
    idade = Number(prompt('Digite a sua idade:'))

        if(idade >= 18){
        alert('Seja Bem -vindo(a) ao websie!')
        // DOCUMENT - DOCUMENTO HTML
        // QUERYSELECTOR - "BUSCADOR"
        // INNERHTML = "DENTRO DO ELEMENTO"
        document.querySelector('body').innerHTML = "TESTE!"
        }else{
            alert('Idade Inválida!')
            window.location = 'https://www.google.com'
        }
}