Algoritmo "LeituraEOrdemInversa"

Var
    numeros: vetor[1..5] de inteiro
    i: inteiro

Inicio
    // Leitura dos 5 n�meros e armazenamento no vetor
    para i de 1 at� 5 faca
        escreva("Digite o ", i, "� n�mero: ")
        leia(numeros[i])
    fimpara

    // Exibindo os n�meros na ordem inversa
    escreva("Os n�meros na ordem inversa s�o: ")
    para i de 5 at� 1 passo -1 faca
        escreva(numeros[i], " ")
    fimpara
Fimalgoritmo
