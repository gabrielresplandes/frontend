document.addEventListener("DOMContentLoaded", function() {
    if (localStorage.getItem("produtoAdicionado")) {
        Swal.fire({
            icon: "success",
            title: "Produto adicionado!",
            showConfirmButton: false,
            timer: 1500,
            background: '#fff',
            color: '#333',
            iconColor: '#28a745'
        });
        localStorage.removeItem("produtoAdicionado");
    }

    if (localStorage.getItem("carrinhoLimpo")) {
        Swal.fire({
            icon: "info",
            title: "Carrinho esvaziado!",
            showConfirmButton: false,
            timer: 1500,
            background: '#fff',
            color: '#333',
            iconColor: '#17a2b8'
        });
        localStorage.removeItem("carrinhoLimpo");
    }
});