const filmes = [
  {
      titulo: "O Poderoso Chefão",
      imagem: "./images/poderoso-chefao.jpg"
  },
  {
      titulo: "Forrest Gump",
      imagem: "./images/forrest-gump.jpg"
  },
  {
      titulo: "O Senhor dos Anéis: A Sociedade do Anel",
      imagem: "./images/senhor-dos-aneis.jpg"
  },
  {
      titulo: "A Origem",
      imagem: "./images/a-origem.jpg"
  },
  {
      titulo: "Clube da Luta",
      imagem: "./images/clube-da-luta.jpg"
  },
  {
      titulo: "Interstellar",
      imagem: "./images/interstellar.jpg"
  }
];

const lista = document.getElementById("filme-lista");

filmes.forEach(filme => {
  const item = document.createElement("li");
  const img = document.createElement("img");
  img.src = filme.imagem;
  img.alt = filme.titulo;
  const texto = document.createElement("span");
  texto.textContent = filme.titulo;
  item.appendChild(img);
  item.appendChild(texto);
  lista.appendChild(item);
});