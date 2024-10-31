Algoritmo "LeituraEOrdemInversa"

Var
    numeros: vetor[1..5] de inteiro
    i: inteiro

Inicio
    // Leitura dos 5 números e armazenamento no vetor
    para i de 1 até 5 faca
        escreva("Digite o ", i, "º número: ")
        leia(numeros[i])
    fimpara

    // Exibindo os números na ordem inversa
    escreva("Os números na ordem inversa são: ")
    para i de 5 até 1 passo -1 faca
        escreva(numeros[i], " ")
    fimpara
Fimalgoritmo
