class Usuario{
    // is, @, nome, email, bio, genero
    constructor(id, apelido, nome, email, bio, genero){
        this.id = id;
        this.apelido = apelido;
        this.nome = nome;
        this.email = email;
        this.bio = bio;
        this.genero = genero;

        this.postar = function(pensamento){
            document.querySelector("#resposta").innerHTML = `
            <div class ="post">
                <h3>${this.apelido}</h3>
                <p> ${pensamento} </p>
            </div>
            `
        }
    }
}

var user1 = new Usuario(1, 'BlazeFalcon', 'Gabriel, gabriel61cod@cod.br', 'Jogador Caro', 'Masculino')
var user2 = new Usuario(2, 'Falcon', 'Edinaldo, edinaldocod@cod.br', 'PERFIL PESSOAL', 'JogadorC', 'Masculino')

function postarFeed(){
    alert("Postado com Sucesso!")
    pensamento = document.querySelector('#pensamento').value
    user1.postar(pensamento)
}