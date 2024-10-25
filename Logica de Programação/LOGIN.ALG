Algoritmo "login"

Var
senha , senhaC , email , emailC : caractere

Inicio
senhaC <- "1234"
emailC <- "email123@gmail.com"

escreval("Qual é o seu email: ")
leia(email)
escreval("Qual é a sua senha: ")
leia(senha)

se(senha = senhaC) e  (email = emailC)entao
     escreval("Login efetuado com sucesso!")
senao
     escreval("Usuario ou senha incorretos! Tente novamente")
fimSe

Fimalgoritmo