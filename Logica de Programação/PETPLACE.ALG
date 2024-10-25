Algoritmo "PetPlace"
// COMPRA POR QUILO
// DESCONTO
// QUANTIDADE DE UNIDADES

Var
opcao : caractere
valorTotal : inteiro

Inicio
escreval("********catalogo*********")
escreval("1 - RACAO PREMIER 10KG       R$ 140,00")
escreval("2 - COLEIRA PEITORAL 2M    R$ 27,00")
escreval("3 - CASA DE TRANSPORTE     R$ 120,00")
escreval("4 - PETISCOS DOGPET 300G   R$ 12,00")
escreval("5 - TAPETE HIGIENICO       R$ 45,00")
escreval("6 - CANCELAR")
escreval("7 - CARRINHO")

leia(opcao)
//switch / case
escolha(opcao)
   caso "1"
   escreval("Item RACAO PREMIER 10KG X 1 adicionado! ")
   valorTotal <- valorTotal + 140
   escreval("Valor total do carrinho: R$",valorTotal)
   
   caso "2"
   escreval("Item COLEIRA PEITORAL 2M X 1 adicionado!")
   valorTotal <- valorTotal + 27,49
   escreval("Valor total do carrinho: R$",valorTotal)
   
   caso "3"
   escreval("Item CASA DE TRANSPORTE X 1 adicionado!")
   valorTotal <- valorTotal + 120,00
   escreval("Valor total do carrinho: R$",valorTotal)
   
   caso "4"
   escreval("Item PETISCOS DOGPET 300G X 1 adicionado!")
   valorTotal <- valorTotal + 12,00
   escreval("Valor total do carrinho: R$",valorTotal)
   
   caso "5"
   escreval("Item TAPETE HIGIENICO X 1 adicionado!")
   valorTotal <- valorTotal + 45,00
   escreval("Valor total do carrinho: R$",valorTotal)
   
   caso "6"
   escreval("Compra Cancelada!")
      outrocaso
      escreval("Opção Inválida!")
fimEscolha

Fimalgoritmo