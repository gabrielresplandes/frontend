// Login System
document.getElementById('login-btn').addEventListener('click', () => {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === 'admin' && password === '1234') {
        document.getElementById('login-section').style.display = 'none';
        document.getElementById('loan-section').style.display = 'block';
    } else {
        alert('Usuário ou senha incorretos!');
    }
});

// Prevent negative or zero values in numeric fields
document.querySelectorAll('input[type="number"]').forEach((input) => {
    input.addEventListener('input', () => {
        if (parseFloat(input.value) < 1 || isNaN(parseFloat(input.value))) {
            input.value = ''; // Reseta o valor se for inválido
        }
    });
});

// Loan Simulation
document.getElementById('simulate-btn').addEventListener('click', () => {
    const clientName = document.getElementById('client-name').value.trim();
    const loanAmount = parseFloat(document.getElementById('loan-amount').value);
    const interestRate = parseFloat(document.getElementById('interest-rate').value) / 100;
    const loanTerm = parseInt(document.getElementById('loan-term').value);

    if (!clientName) {
        alert('O nome do cliente não pode ficar em branco.');
        return;
    }
    if (isNaN(loanAmount) || loanAmount <= 0) {
        alert('O valor do empréstimo deve ser um número positivo.');
        return;
    }
    if (isNaN(interestRate) || interestRate <= 0) {
        alert('A taxa de juros deve ser um número positivo.');
        return;
    }
    if (isNaN(loanTerm) || loanTerm <= 0) {
        alert('O prazo deve ser um número positivo.');
        return;
    }

    const monthlyRate = interestRate;
    const monthlyPayment = (loanAmount * monthlyRate) / (1 - Math.pow(1 + monthlyRate, -loanTerm));
    const totalPayment = monthlyPayment * loanTerm;
    const totalInterest = totalPayment - loanAmount;

    document.getElementById('result-client-name').textContent = clientName;
    document.getElementById('result-monthly-payment').textContent = monthlyPayment.toFixed(2);
    document.getElementById('result-total-payment').textContent = totalPayment.toFixed(2);
    document.getElementById('result-total-interest').textContent = totalInterest.toFixed(2);

    document.getElementById('simulation-result').style.display = 'block';
});
