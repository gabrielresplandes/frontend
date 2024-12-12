document.addEventListener('DOMContentLoaded', () => {
    const recipes = {
        salgado: "Receita de Coxinha de Frango:\n- Ingredientes:\n  * 500g de peito de frango desfiado\n  * 1 colher de sopa de requeijão\n  * Temperos a gosto\n  * Massa: 2 xícaras de farinha de trigo, 2 xícaras de caldo de galinha\n- Preparo:\n  1. Refogue o frango com os temperos.\n  2. Faça a massa misturando o caldo de galinha com a farinha.\n  3. Modele a coxinha, recheie com o frango e frite.",

        doce: "Receita de Brigadeiro:\n- Ingredientes:\n  * 1 lata de leite condensado\n  * 2 colheres de sopa de chocolate em pó\n  * 1 colher de sopa de manteiga\n  * Granulado para decorar\n- Preparo:\n  1. Misture o leite condensado, o chocolate e a manteiga em uma panela.\n  2. Mexa em fogo baixo até desgrudar do fundo.\n  3. Deixe esfriar, enrole e passe no granulado.",

        sucos: "Receita de Suco de Laranja:\n- Ingredientes:\n  * 5 laranjas\n  * Açúcar a gosto\n  * Gelo\n- Preparo:\n  1. Esprema as laranjas para obter o suco.\n  2. Adicione açúcar e gelo a gosto.\n  3. Misture bem e sirva gelado."
    };

    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('click', () => {
            const recipeType = card.id;
            alert(recipes[recipeType]);
        });
    });
});