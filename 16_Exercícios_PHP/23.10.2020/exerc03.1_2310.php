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

        $valor_produto = 50;
        $produto = "Capa para smartphone";
        $nome_comprador = "Matheus Bla Bla";

        if($valor_produto < 40){
            $porcent = 45;
            $valor_venda = $valor_produto + ($valor_produto*$porcent/100);
        }else{
            $porcent = 30;
            $valor_venda = $valor_produto + ($valor_produto*$porcent/100);
        }
    
    echo "<b>".$nome_comprador. "</b>, acabou de comprar o produto: <b>" .$produto. "</b>, no valor de <b>R$ " .$valor_venda. "</b>.";
    echo "<br/>";
    echo "O comerciante comprou esse produto no valor de <b>R$ " .$valor_produto. "</b>, e repassou com ganho de <b>" .$porcent. "%<b/>.";

?>
</body>
</html>
