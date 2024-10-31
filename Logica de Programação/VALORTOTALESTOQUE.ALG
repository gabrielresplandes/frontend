Algoritmo "ValorTotalEstoque"

Var
    nome1, nome2, nome3: caractere
    valor1, valor2, valor3: real
    valor_total, media_valor: real

Inicio
    escreva("Digite o nome da primeira mercadoria: ")
    leia(nome1)
    escreva("Digite o valor da primeira mercadoria: ")
    leia(valor1)

    escreva("Digite o nome da segunda mercadoria: ")
    leia(nome2)
    escreva("Digite o valor da segunda mercadoria: ")
    leia(valor2)

    escreva("Digite o nome da terceira mercadoria: ")
    leia(nome3)
    escreva("Digite o valor da terceira mercadoria: ")
    leia(valor3)

    valor_total <- valor1 + valor2 + valor3
    media_valor <- valor_total / 3

    escreva("O valor total em estoque é: ", valor_total)
    escreva(" A média de valor das mercadorias é: ", media_valor)
Fimalgoritmo
