document.getElementById('reserva-form').addEventListener('submit', function (event) {
    event.preventDefault();

    const cliente = document.getElementById('cliente').value.trim();
    const dias = parseInt(document.getElementById('dias').value);
    const valorDiaria = parseFloat(document.getElementById('valorDiaria').value);

    if (dias <= 0) {
        alert('A quantidade de dias deve ser maior que zero.');
        return;
    }
    if (valorDiaria <= 0) {
        alert('O valor da diária deve ser maior que zero.');
        return;
    }

    const valorTotal = dias * valorDiaria;

    const listaReservas = document.getElementById('listaReservas');

    const reservaExistente = Array.from(listaReservas.children).find(li => li.dataset.cliente === cliente);

    if (reservaExistente) {
        const dadosReserva = JSON.parse(reservaExistente.dataset.dados);
        dadosReserva.dias += dias;
        dadosReserva.valorTotal = dadosReserva.dias * dadosReserva.valorDiaria;
        reservaExistente.dataset.dados = JSON.stringify(dadosReserva);

        reservaExistente.querySelector('.reserva-info').textContent = `Cliente: ${cliente}, Dias: ${dadosReserva.dias}, Valor da Diária: R$${dadosReserva.valorDiaria.toFixed(2)}, Total: R$${dadosReserva.valorTotal.toFixed(2)}`;
    } else {
        const novaReserva = document.createElement('li');
        novaReserva.dataset.cliente = cliente;
        novaReserva.dataset.dados = JSON.stringify({ cliente, dias, valorDiaria, valorTotal });

        novaReserva.innerHTML = `
            <span class="reserva-info">Cliente: ${cliente}, Dias: ${dias}, Valor da Diária: R$${valorDiaria.toFixed(2)}, Total: R$${valorTotal.toFixed(2)}</span>
            <button class="baixa-btn">Dar Baixa</button>
        `;

        novaReserva.querySelector('.baixa-btn').addEventListener('click', function () {
            listaReservas.removeChild(novaReserva);
        });

        listaReservas.appendChild(novaReserva);
    }
    
    document.getElementById('reserva-form').reset();
});
