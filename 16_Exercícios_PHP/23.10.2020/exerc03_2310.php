<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
</head>
<body>
<?php
    // EXERCÍCIO 3
   // Um comerciante comprou um produto por um preço determinado e quer vendê-lo 
   // com lucro de 45% se o valor do produto comprado pelo comerciante for menor que 40,00; 
   // caso contrário, o lucro sobre a venda será de 30%. 
   // Informar valor do produto e informar o nome do comprador do produto. 
   // Após a verificação com base no valor do produto, exibir o nome do comprador e o valor da venda atualizado.


    $preco = 40.00;
    $comprador = "Tchabalala";
    $lucro1 = (45/100)+1;
    $lucro2 = (30/100)+1;
    $venda1 = $preco*$lucro1;
    $venda2 = $preco*$lucro2;


    echo "Sistema de determinação de lucro em mercadoria<br/> <br/>";
    echo "Preço de compra pelo comerciante foi de: R$ {$preco}<br/><br/>";
    echo "$comprador comprou e pagou R$: <br/>";

    if (($preco < 40.00)){
        echo ($preco*$lucro1);
    }
    else {
        echo ($preco*$lucro2);
    }
?>
</body>
</html>



