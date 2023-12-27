

<?php
function calcularDesconto($valorDoProduto, $categoria) {
    switch ($categoria) {
        case $categoria== "vestuário":
            return $valorDoProduto - ($valorDoProduto * 20);
              break;    
        case $categoria== "eletrônicos":
            return $valorDoProduto - ($valorDoProduto * 0.10);
            break;

        case $categoria== "alimentos":
            return $valorDoProduto - ($valorDoProduto * 0.05);
              break;
        default:
            return $valorDoProduto; // Nenhum desconto para outras categorias.
    }
}
calcularDesconto(100,"fg")
?>