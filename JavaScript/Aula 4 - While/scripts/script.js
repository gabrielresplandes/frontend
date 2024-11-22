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
    var livros = [
        ['images/livro.jpg','O MENINO DO PIJAMA LISTRADO'],
        ['images/book.jpg','Meu Passado me Condenava'],
        ['images/marcalbook.jpg','Os Códigos do Milhão - Pablo Marçal'],
        ['images/marcalbook2.jpg','Como Fazer Um Milhão Antes Dos 20'],
        ['images/marcalbook3.jpg','Desventuras em Série'],
        ['images/bolsobook.jpg', 'Mito ou Verdade'],
        ['images/teslabook.jpg', 'This Is Elon Musk']
    ]
    livros.forEach(cadaLivro => {
        document.getElementById('catalogo').innerHTML +=`
        <div class="livro">
                <img src="${cadaLivro[0]}" alt="">
                <h4>${cadaLivro[1]}</h4>

                <button>
                    Adicionar
                    <img src="images/plus.svg" alt="">
                </button>
        </div>
        `
    })
}

carregarCatalogo()