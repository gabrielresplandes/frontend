Algoritmo "semnome"

Var
    time1, time2 : caractere
    golsUm, golsDois : inteiro

Inicio
    escreval("Digite o nome do primeiro time: ")
    leia(time1)
    escreval("Digite o n�mero de gols do ", time1, ": ")
    leia(golsUm)

    escreval("Digite o nome do segundo time: ")
    leia(time2)
    escreval("Digite o n�mero de gols do ", time2, ": ")
    leia(golsDois)

    se (golsUm > golsDois) ent�o
        escreval("Vencedor: ", time1)
    senao
        se (golsDois > golsUm) ent�o
            escreval("Vencedor: ", time2)
        senao
            escreval("Empate")
        fimSe
    fimSe

Fimalgoritmo
