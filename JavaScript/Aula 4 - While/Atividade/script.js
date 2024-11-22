// Array de filmes com títulos e caminhos para imagens locais
const filmes = [
    {
      titulo: "O Poderoso Chefão",
      imagem: "./imagens/poderoso-chefao.jpg"
    },
    {
      titulo: "Forrest Gump",
      imagem: "./imagens/forrest-gump.jpg"
    },
    {
      titulo: "O Senhor dos Anéis: A Sociedade do Anel",
      imagem: "./imagens/senhor-dos-aneis.jpg"
    },
    {
      titulo: "A Origem",
      imagem: "./imagens/a-origem.jpg"
    },
    {
      titulo: "Clube da Luta",
      imagem: "./imagens/clube-da-luta.jpg"
    },
    {
      titulo: "Interstellar",
      imagem: "./imagens/interstellar.jpg"
    }
  ];
  
  // Seleciona o elemento <ul> no HTML
  const lista = document.getElementById("filme-lista");
  
  // Itera sobre o array de filmes e adiciona cada filme como um item da lista
  filmes.forEach(filme => {
    const item = document.createElement("li"); // Cria um elemento <li>
    
    // Cria a imagem e define o atributo src e alt
    const img = document.createElement("img");
    img.src = filme.imagem;
    img.alt = filme.titulo;
  
    // Cria o texto do título do filme
    const texto = document.createElement("span");
    texto.textContent = filme.titulo;
  
    // Adiciona a imagem e o texto ao item da lista
    item.appendChild(img);
    item.appendChild(texto);
  
    // Adiciona o item à lista
    lista.appendChild(item);
  });
  