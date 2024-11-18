function calculadora(){
    alert("Calculadora! Faça os calculos básicos que deseja!")
    escolha = prompt('A) Soma, B) Subtração, C) Multiplicação, D) Divisão')

    switch(escolha){
    
        case 'A':
        var numA = prompt('Digite o primeiro número:')
        var numB = prompt('Digite o segundo número:')
        
        var valorTotal = Number(numA) + Number(numB)
        alert('= ' + valorTotal)
        break
    
        case 'B':
        var numA = prompt('Digite o primeiro número:')
        var numB = prompt('Digite o segundo número:')

        var valorTotal = Number(numA) - Number(numB)
        alert('= ' + valorTotal)
        break
    
        case 'C':
        var numA = prompt('Digite o primeiro número:')
        var numB = prompt('Digite o segundo número:')

        var valorTotal = Number(numA) * Number(numB)
        alert('= ' + valorTotal)
        break
        
        case 'D':
        var numA = prompt('Digite o primeiro número:')
        var numB = prompt('Digite o segundo número:')

        var valorTotal = Number(numA) / Number(numB)
        alert('= ' + valorTotal)
        break
    }
}

function nota(){
    nota = Number(prompt('Digite a nota do aluno:'))

        if(nota >= 7){
        alert('O referido aluno está aprovado!')

        }else{
            alert('O aluno não obteve a nota suficiente para aprovação!')
        }
}

function diadasemana(){
    alert("Seja Bem-Vindo(a)! Dê OK e prossiga.")
    escolha = prompt('Digite um número de 1 a 7 e descubra o dia da semana correspondente:')
    
    switch(escolha){
        case '1':
            alert('Segunda-Feira')
            break

            case '2':
            alert('Terça-Feira')
            break

            case '3':
            alert('Quarta-Feira')
            break

            case '4':
            alert('Quinta-Feira')
            break

            case '5':
            alert('Sexta-Feira')
            break

            case '6':
            alert('Sábado')
            break

            case '7':
            alert('Domingo')
            break
    }
}