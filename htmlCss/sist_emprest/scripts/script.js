document.addEventListener("DOMContentLoaded", () => {
    loadLoans();
});

function addLoan() {
    const name = document.getElementById("name").value;
    const amount = parseFloat(document.getElementById("amount").value);
    const interest = parseFloat(document.getElementById("interest").value);
    const paymentType = document.getElementById("paymentType").value;
    const monthsInput = document.getElementById("months");
    const loanDate = document.getElementById("loanDate").value;
    const dueDateInput = document.getElementById("dueDate").value;
    const paymentMethod = document.getElementById("paymentMethod").value;
    let months = 1;
    let remainingBalance = amount;
    let ongoingInterest = paymentType !== "installments";
    let dueDates = [];

    if (!name || isNaN(amount) || isNaN(interest) || !loanDate || !paymentMethod) {
        alert("Preencha todos os campos corretamente!");
        return;
    }

    if (paymentType === "installments") {
        months = parseInt(monthsInput.value);
        if (isNaN(months) || months <= 0) {
            alert("Informe a quantidade de meses para parcelamento.");
            return;
        }
        let currentDate = new Date(loanDate);
        for (let i = 1; i <= months; i++) {
            currentDate.setMonth(currentDate.getMonth() + 1);
            dueDates.push(currentDate.toISOString().split("T")[0]);
        }
    } else {
        if (!dueDateInput) {
            alert("Informe a data de pagamento para empréstimos de pagamento único.");
            return;
        }
        dueDates.push(dueDateInput);
    }

    let totalPayable = remainingBalance + (remainingBalance * (interest / 100) * months);
    let monthlyInterest = remainingBalance * (interest / 100);
    let initialPayment = paymentType === "installments" ? (amount * (interest / 100)) : "";

    const newLoan = { name, amount, interest, paymentType, months, totalPayable, initialPayment, loanDate, dueDates, paymentMethod, remainingBalance, ongoingInterest };
    saveLoan(newLoan);
    renderLoans();
    updateSummary();
    resetForm();
}

function saveLoan(loan) {
    let loans = JSON.parse(localStorage.getItem("loans")) || [];
    loans.push(loan);
    localStorage.setItem("loans", JSON.stringify(loans));
}

function loadLoans() {
    renderLoans();
    updateSummary();
}

function renderLoans() {
    const loanList = document.getElementById("loanList");
    loanList.innerHTML = "";
    let loans = JSON.parse(localStorage.getItem("loans")) || [];

    loans.forEach((loan, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${loan.name}</td>
            <td>R$ ${loan.amount.toFixed(2)}</td>
            <td>${loan.interest}%</td>
            <td>${loan.paymentType === "installments" ? loan.months : (loan.ongoingInterest ? "Juros Contínuos" : "Único")}</td>
            <td>R$ ${loan.totalPayable.toFixed(2)}</td>
            <td>${loan.paymentType === "installments" ? `R$ ${loan.initialPayment.toFixed(2)}` : ""}</td>
            <td>${loan.loanDate}</td>
            <td>${loan.dueDates.length > 0 ? loan.dueDates.join("<br>") : "-"}</td>
            <td>${loan.paymentMethod}</td>
            <td>R$ ${loan.remainingBalance.toFixed(2)}</td>
            <td><button class="delete-btn" data-index="${index}" onclick="confirmDelete(${index})">Excluir</button></td>
            <td><button class="pay-btn" data-index="${index}" onclick="registerPartialPayment(${index})">Registrar Pagamento</button></td>
        `;
        loanList.appendChild(row);
    });
}

function confirmDelete(index) {
    const password = prompt("Digite a senha para confirmar a exclusão:");
    if (password === "1234") {
        deleteLoan(index);
    } else {
        alert("Senha incorreta! Exclusão cancelada.");
    }
}

function deleteLoan(index) {
    let loans = JSON.parse(localStorage.getItem("loans")) || [];
    loans.splice(index, 1);
    localStorage.setItem("loans", JSON.stringify(loans));
    renderLoans();
    updateSummary();
}

function registerPartialPayment(index) {
    let loans = JSON.parse(localStorage.getItem("loans")) || [];
    let loan = loans[index];
    let paymentAmount = parseFloat(prompt("Informe o valor do pagamento parcial:"));

    if (isNaN(paymentAmount) || paymentAmount <= 0) {
        alert("Valor inválido!");
        return;
    }

    if (paymentAmount > loan.remainingBalance) {
        alert("O valor do pagamento não pode ser maior que o saldo restante!");
        return;
    }

    loan.remainingBalance -= paymentAmount;
    loan.totalPayable = loan.remainingBalance + (loan.remainingBalance * (loan.interest / 100) * loan.months);
    loan.monthlyInterest = loan.remainingBalance * (loan.interest / 100);
    
    if (loan.remainingBalance === 0) {
        loans.splice(index, 1);
    }

    localStorage.setItem("loans", JSON.stringify(loans));
    renderLoans();
    updateSummary();
}

function updateSummary() {
    let loans = JSON.parse(localStorage.getItem("loans")) || [];
    let totalLoaned = loans.reduce((sum, loan) => sum + loan.amount, 0);
    let totalReceivable = loans.reduce((sum, loan) => sum + loan.remainingBalance, 0);

    document.getElementById("totalLoaned").textContent = `Total Emprestado: R$ ${totalLoaned.toFixed(2)}`;
    document.getElementById("totalReceivable").textContent = `Total a Receber: R$ ${totalReceivable.toFixed(2)}`;
}

document.getElementById("paymentType").addEventListener("change", function() {
    document.getElementById("months").style.display = this.value === "installments" ? "block" : "none";
    document.getElementById("dueDate").style.display = this.value === "installments" ? "none" : "block";
});