function testes(){
    //enquanto condição faça
    //para de tanto até tanto faça
    contador = 0
   // while (contador < 3) {
   //     alert(`TESTE!' FIZ ${contador+1} vezes`)
   //     contador++
   // }
   //})

   for(var i =0;i < 3;i++){
    alert(`TESTE!' FIZ ${i} vezes`)
   }
}

//testes()

function carregarCatalogo(){
    for (let i = 0;i < 30;i++){
        document.getElementById('catalogo').innerHTML +=`
        <div class="livro">
                <img src="images/livro.jpg" alt="">
                <h4>O menino do pijama listrado</h4>

                <button>
                    Adicionar
                    <img src="images/plus.svg" alt="">
                </button>
        </div>
        `
    }
}

carregarCatalogo()