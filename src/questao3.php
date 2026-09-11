<?php
$valor = (float) readline("Digite um valor: ");
$pix = (string) readline("Você possui pix?:(s/n) ");
$cartao = (string) readline ("Você possui cartão?: (s/n) ");

$pagamentoAceito = ($pix == "s") || $cartao == "s";

if ($pagamentoAceito){
    echo "Pedido aprovado \n";
}else{
    echo " Pedido recusado: nenhuma forma de pagamento disponível.\n";
}