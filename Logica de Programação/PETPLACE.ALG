Algoritmo "PetPlace"
// COMPRA POR QUILO
// DESCONTO
// QUANTIDADE DE UNIDADES

Var
opcao, finalizarCarrinho, opcaoFinalizar : caractere
valorTotal : real

procedimento adicionarAoCarrinho(vp : real)
   VAR
   nomep : caractere
   INICIO
   limpaTela()
   escreval("Digite o nome do produto: ")
   leia(nomep)
   escreval("Item ",nomep," adicionado")
   escreval("Item adicionado! ")
   valorTotal <- valorTotal + vp
   escreval("Valor total do carrinho R$ :",valorTotal)
   
fimProcedimento

Inicio
finalizarCarrinho <- "n"
enquanto (finalizarCarrinho = "n") faca
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
      adicionarAoCarrinho(140)

      caso "2"
      adicionarAoCarrinho(27)

      caso "3"
      adicionarAoCarrinho(120)

      caso "4"
      adicionarAoCarrinho(12)

      caso "5"
      adicionarAoCarrinho(45)

      caso "6"
      escreval("Compra Cancelada!")
         outrocaso
         escreval("Opção Inválida!")
   fimEscolha
   
   escreval("Deseja adicionar mais alguma coisa? ")
   escreval("1 - Sim")
   escreval("2 - Não")
   leia(opcaoFinalizar)
   
   se(opcaoFinalizar = "1")entao
      finalizarCarrinho <- "n"
   senao
      finalizarCarrinho <- "s"
   fimSe
   limpaTela()
fimEnquanto

Fimalgoritmo