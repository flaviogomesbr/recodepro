import React, { useState, useEffect } from "react";

const ProductList = () => {
  const [prods, setProds] = useState([]);

  useEffect(async () => {
    const res = await fetch(
      "http://localhost:5000/produto"
    );
    const data = await res.json();  
    setProds(data);
  }, []);
  console.log(prods);

  function enterPointer(event) {
    const img = event.target
    img.ClassName = "card-img-top rounded-circle border border-sucess";
  }

  function outPointer(event) {
    const img = event.target
    img.ClassName = "card-img-top img-thumbnail";
  }


  return (
    <>

      {prods.map((item) => {
        return (
              <>
              <div  id={item.id_categoria} key={item.idproduto} className="card bg-light m-4 box-item"  style={{width:"13rem" , height:"25rem"}}>
                <img style={{width:"120px"}}      src={item.imagem} className="card-img-top mx-auto d-block img-thumbnail" />
                <div className="card-body text-center">
                  <p className="card-text font-weight-bold " style={{fontSize:"0.8rem"}}>{item.descricao}</p>
                  <h7 className="card-title" style={{textDecoration:"linethrough"}}><strike>R$ {item.preco}</strike></h7>
                  <h6 className="card-title text-primary font-weight-bold">R$ {item.precofinal}</h6>
                </div>
              </div>
              </>
                );
            })}
          </>
          );
          };

export default ProductList;
