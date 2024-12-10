lista_categorias = []

class Categoria{
    constructor(titulo,img,desc,marca){
        this.titulo = titulo
        this.img = img
        this.desc = desc
        this.marca = marca
    }
}

lista_categorias.push(new Categoria('Volvo XC60','images/volvo1.png','Design inteligente em cada curva. Conheça nosso SUV híbrido plug-in inteligente com Google integrado.','By WebCars - 2024'))
lista_categorias.push(new Categoria('Volkswagen TAOS','images/taos.png','O sistema de segurança emite alertas visuais e sonoros ao detectar um pedestre, o que contribui para evitar acidentes. Além disso, o SUVW estaciona sozinho com o Park Assist.','By WebCars - 2024'))

lista_categorias.forEach(categoria => {
    document.querySelector('#categoriaItems').innerHTML += `
    
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
            <div class="col-md-4">
            <img src="${categoria.img}" class="img-fluid rounded-start" alt="Volvo XC60">
        </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">${categoria.titulo}</h5>
                <p class="card-text">${categoria.desc}</p>
              <p class="card-text"><small class="text-body-secondary">${categoria.marca}</small></p>
            </div>
          </div>
        </div>
      </div>

    `
});