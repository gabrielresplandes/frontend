//var clienteNome = 'Leo'
//var clienteCpf = 99999999
//var clienteEmail = 'email@email'
//var clienteTelefone = 888888888
//var clienteTipoConta = 'PF'
//var clienteSaldo = 0

//var clienteNome2 = 'Alessandra'

class Cliente{
    nome;
    dataNascimento;
    cpf;
    email;
    telefone;
    tipodeConta;
    saldo;
    depositar(valor){
        if(valor <= 0){
            console.log('Operação não permitida!')
        }else{
        this.saldo += valor
        console.log(`O valor de ${valor} foi depositado com sucesso!`)
        }
    }
    // argumento - é valor passado
    // parametro - é a palavra que vai salvar o argumento
    pix(valor){
        if (this.saldo <= valor){
        console.log(`Saldo Insuficiente`)
    }else{
        this.saldo -= valor
        console.log(`Pix no valor de ${valor} foi efetuado com sucesso!`)
    }
    
    }
}
var cliente1 = new Cliente
cliente1.nome = 'Leo'
cliente1.dataNascimento = '11/03/1998'
cliente1.cpf = 888888888-88
cliente1.email = 'leozin.dpf@gov.br'
cliente1.saldo = 0
cliente1.pix(100)

console.log(cliente1)
