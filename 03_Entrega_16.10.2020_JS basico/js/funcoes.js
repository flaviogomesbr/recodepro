function exibir_categoria(categoria){

    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos);
    for(var i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id) {
            elementos[i].style = "display:inline-block";
        } else {
            elementos[i].style = "display:none";
        }
    }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto');
    
    for(var i=0; i<elementos.length; i++){
            elementos[i].style = "display:inline-block";
    }
};



// Função que aumenta e diminui a imagem da tela de produtos. Foram criados vários "let destaque" porque as imagens .jpeg 
// não tinham o mesmo tamanho, portanto foi preciso adaptar os valores para dobrar 

let destaque1 = (imagem) => {
    console.log(imagem);
    if(imagem.width == 120)
        imagem.width = 60;
    else
        imagem.width = 120;
};

let destaque2 = (imagem) => {
    console.log(imagem);
    if(imagem.width == 96)
        imagem.width = 48;
    else
        imagem.width = 96;
};

let destaque3 = (imagem) => {
    console.log(imagem);
    if(imagem.width == 96)
        imagem.width = 48;
    else
        imagem.width = 96;
};

let destaque4 = (imagem) => {
    console.log(imagem);
    if(imagem.width == 100)
        imagem.width = 50;
    else
        imagem.width = 100;
};

let destaque5 = (imagem) => {
    console.log(imagem);
    if(imagem.width == 200)
        imagem.width = 100;
    else
        imagem.width = 200;
};

let destaque6 = (imagem) => {
    console.log(imagem);
    if(imagem.width == 120)
        imagem.width = 60;
    else
        imagem.width = 120;
};

let destaque7 = (imagem) => {
    console.log(imagem);
    if(imagem.width == 170)
        imagem.width = 85;
    else
        imagem.width = 170;
};

let destaque8 = (imagem) => {
    console.log(imagem);
    if(imagem.width == 160)
        imagem.width = 80;
    else
        imagem.width = 160;
};




