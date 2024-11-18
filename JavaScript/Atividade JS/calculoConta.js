var numClientes = prompt('Digite o número de clientes:')
var valorTotal = prompt('Digite o valor total da conta:')

var valorPorCliente = Number(valorTotal) / Number(numClientes)

alert('Cada cliente deve pagar: R$ ' + valorPorCliente)