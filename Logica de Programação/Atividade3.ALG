Algoritmo "semnome"

Var
timeA, timeB : caractere
golsUm, golsDois : inteiro

Inicio
escreval("Digite o nome do primeiro time: ")
leia(timeA)
escreval("Digite o número de gols do ", time1, ": ")
leia(golsUm)

escreva("Digite o nome do segundo time: ")
leia(timeB)
escreval("Digite o número de gols do ", time2, ": ")
leia(golsDois)

se(golsUm > golsDois)entao
   escreval("Vencedor: ", timeA)
   
   senao
   se(golsDois > golsUm)
   escreval("Vencedor: ", timeB)
   
   senao
   escreval("Empate")
   
fimSe

Fimalgoritmo