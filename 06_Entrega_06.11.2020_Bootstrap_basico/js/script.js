function exibirCategoria(category) {
  let elements = document.getElementsByClassName("box-item");
  console.log(elements);
  for (let i = 0; i < elements.length; i++) {
    console.log(elements[i].id);
    if (category == elements[i].id) {
      elements[i].style.display = 'block';
    } else {
      elements[i].style.display = 'none';
    }
  }
}

function todasCategorias() {
  let elements = document.getElementsByClassName("box-item");
  console.log(elements);
  for (let i = 0; i < elements.length; i++) {
    console.log(elements[i].id);
    elements[i].style.display = 'block';
  }
}