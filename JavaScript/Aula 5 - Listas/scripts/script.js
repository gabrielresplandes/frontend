//var fruta1 = 'Melancia'
//var fruta2 = 'Tomate'
//var fruta3 = 'Melão'
//var fruta4 = 'Maracujá'
//var fruta5 = 'Mexerica'

fruta = ['Melancia','Tomate','Melão','Maracujá','Mexerica']
teste = Array()
teste[0] = 'Olha'
teste[1] = 'que'
teste[2] = 'interessante'

console.log(fruta)
console.log(fruta[1])

// PUSH 'EMPURRAR'
fruta.push('Morango')
console.log(fruta)

// UNSHIFT - ADICIONAR NO COMEÇO DA LISTA
fruta.unshift('Abacate')
console.log(fruta)

// POP - REMOVER O ULTIMO
fruta.pop()
console.log(fruta)

// SHIFT - REMOVER O PRIMEIRO
fruta.shift()
console.log(fruta)

// SPLICE - REMOVE, ADICIONA E ATUALIZA
// ONDE? (INDICE), QUANTOS VOU DELETAR?
// SE NENHUM O QUE VOU ADICIONAR?

fruta.splice(2,3)
fruta.splice(2,0,'Morango')
fruta.splice(1,1,'Maracuja')
console.log(fruta)

fruta.push('Abacaxi')


for(var i = 0;i < fruta.lenght;i++){
    document.getElementById('resposta').innerHTML += `
    ${fruta[i]}
    `
}

fruta.forEach(cadaFruta =>{
    document.getElementById('resposta').innerHTML += `
    ${cadaFruta} <br>
    `
});