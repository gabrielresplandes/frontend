document.addEventListener("DOMContentLoaded", loadLoans);

function addLoan() {
    const name = document.getElementById("name").value;
    const amount = parseFloat(document.getElementById("amount").value);
    const interest = parseFloat(document.getElementById("interest").value);
    const paymentType = document.getElementById("paymentType").value;
    const monthsInput = document.getElementById("months");
    const loanDate = document.getElementById("loanDate").value;
    const dueDate = document.getElementById("dueDate").value;
    const paymentMethod = document.getElementById("paymentMethod").value;
    let months = 1;

    if (!name || isNaN(amount) || isNaN(interest) || !loanDate || !dueDate || !paymentMethod) {
        alert("Preencha todos os campos corretamente!");
        return;
    }

    if (paymentType === "installments") {
        months = parseInt(monthsInput.value);
        if (isNaN(months) || months <= 0) {
            alert("Informe a quantidade de meses para parcelamento.");
            return;
        }
    }

    let totalPayable = 0;
    let initialPayment = 0;

    if (paymentType === "installments") {
        initialPayment = (amount * (interest / 100)).toFixed(2);
        totalPayable = (amount + (amount * (interest / 100) * months)).toFixed(2);
    } else {
        totalPayable = (amount + (amount * (interest / 100))).toFixed(2);
    }

    const newLoan = { name, amount, interest, paymentType, months, totalPayable, initialPayment, loanDate, dueDate, paymentMethod };
    saveLoan(newLoan);
    renderLoans();
    resetForm();
}

function saveLoan(loan) {
    let loans = JSON.parse(localStorage.getItem("loans")) || [];
    loans.push(loan);
    localStorage.setItem("loans", JSON.stringify(loans));
}

function loadLoans() {
    renderLoans();
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
            <td>${loan.paymentType === "installments" ? loan.months : "Único"}</td>
            <td>R$ ${loan.totalPayable}</td>
            <td>${loan.paymentType === "installments" ? `R$ ${loan.initialPayment}` : "-"}</td>
            <td>${loan.loanDate}</td>
            <td>${loan.dueDate}</td>
            <td>${loan.paymentMethod}</td>
            <td><button class="delete-btn" onclick="deleteLoan(${index})">Excluir</button></td>
        `;
        loanList.appendChild(row);
    });
}

function deleteLoan(index) {
    let loans = JSON.parse(localStorage.getItem("loans")) || [];
    loans.splice(index, 1);
    localStorage.setItem("loans", JSON.stringify(loans));
    renderLoans();
}

function resetForm() {
    document.getElementById("name").value = "";
    document.getElementById("amount").value = "";
    document.getElementById("interest").value = "";
    document.getElementById("months").value = "";
    document.getElementById("loanDate").value = "";
    document.getElementById("dueDate").value = "";
    document.getElementById("paymentMethod").value = "";
    document.getElementById("paymentType").value = "single";
    document.getElementById("months").style.display = "none";
}

document.getElementById("paymentType").addEventListener("change", function() {
    const monthsInput = document.getElementById("months");
    monthsInput.style.display = this.value === "installments" ? "block" : "none";
});