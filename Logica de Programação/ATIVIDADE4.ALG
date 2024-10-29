Algoritmo "Atividade4"

Var
  idade: inteiro
  classificar_nadador: caractere

Inicio
  funcao classificar_nadador(idade: inteiro): caractere
  inicio
    se (idade >= 5) e (idade <= 7) entao
      retorne "Infantil A"
    senao
       se (idade >= 8) e (idade <= 11) entao
          retorne "Infantil B"
       senao
            se (idade >= 12) e (idade <= 13) entao
               retorne "Juvenil A"
            senao
                 se (idade >= 14) e (idade <= 17) entao
                    retorne "Juvenil B"
                 senao
                      se (idade >= 18) entao
                         retorne "Adultos"
                      senao
                         retorne "Idade inválida"
                 fimse
              fimSe
           fimSe
        fimSe
    fimSe
  fimfuncao

  escreva("Digite a idade do nadador: ")
  leia(idade)

  escreva("Categoria: ", classificar_nadador(idade))

Fimalgoritmo