const filmes = {
    'Nome' : 'Sociedade da Neve',
    'Desc' : 'Lorem',
    'Genero' : 'Drama'
}

console.log(filmes)
console.log(filmes.Nome)

// Keys - retorna os atributos (chave)
const filmesKey = Object.keys(filmes)
console.log(filmesKey)

// entries - retorna em lista os valores (valor)
const filmesEntries = Object.entries(filmes)
console.log(filmesEntries)

// map
const nomesFilmes = ['Ilha do Medo','Bruxa de Blair', 'Interestellar', 'Velozes e Furiosos']

const lista = {
    'filmes' : [
        {
            'nome' : 'Ilha do medo',
            'Desc' : 'lorem'
        },
        {
            'nome' : 'Bruxa de Blair',
            'Desc' : 'Lorem'
        },
    ],

    'jogos' : [
        {
            'nome' : 'God of War',
            'Desc' : 'lorem'
        },
        {
            'nome' : 'The Last Of Us',
            'Desc' : 'lorem'
        },
    ]
}

const resultado = lista.filmes.map((elemento) => {
    document.querySelector('body').innerHTML += `
        <h3>${elemento.nome}</h3>
    `
})