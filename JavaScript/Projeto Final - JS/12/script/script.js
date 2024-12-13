document.addEventListener('DOMContentLoaded', () => {
    const pages = document.querySelectorAll('.page');
    const navLinks = document.querySelectorAll('nav ul li a');
    const loginForm = document.getElementById('login-form');
    const loanForm = document.getElementById('loan-form');
    const loanList = document.getElementById('loan-list');
    const logoutButton = document.getElementById('logout-button');

    const validCredentials = {
        username: 'admin',
        password: '1234',
    };

    const loans = JSON.parse(localStorage.getItem('loans')) || [];

    const showPage = (pageId) => {
        pages.forEach(page => page.classList.remove('active'));
        document.getElementById(pageId).classList.add('active');
    };

    const renderLoans = () => {
        loanList.innerHTML = '';
        loans.forEach((loan, index) => {
            const li = document.createElement('li');
            li.innerHTML = `
                <strong>${loan.clientName}</strong><br>
                Valor: R$${loan.amount.toFixed(2)}<br>
                Data: ${loan.date}<br>
                Observações: ${loan.notes}<br>
                <button class="delete-loan" data-index="${index}">Excluir</button>
            `;
            loanList.appendChild(li);
        });
    };

    const saveLoans = () => {
        localStorage.setItem('loans', JSON.stringify(loans));
        renderLoans();
    };

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const pageId = e.target.getAttribute('href').replace('#', '') + '-page';
            showPage(pageId);
        });
    });

    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        if (username === validCredentials.username && password === validCredentials.password) {
            showPage('loan-management-page');
        } else {
            alert('Usuário ou senha inválidos.');
        }
    });

    loanForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const clientName = document.getElementById('client-name').value;
        const amount = parseFloat(document.getElementById('loan-amount').value);
        const date = document.getElementById('loan-date').value;
        const notes = document.getElementById('loan-notes').value;

        loans.push({ clientName, amount, date, notes });
        saveLoans();

        loanForm.reset();
    });

    loanList.addEventListener('click', (e) => {
        if (e.target.classList.contains('delete-loan')) {
            const index = e.target.getAttribute('data-index');
            loans.splice(index, 1);
            saveLoans();
        }
    });

    logoutButton.addEventListener('click', () => {
        showPage('login-page');
    });

    renderLoans();
});
