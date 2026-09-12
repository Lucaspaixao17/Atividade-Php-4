<?php
$entrada = readline("Digite um valor: ");
$comparacaoSolta = ($entrada == 10) ? "true" : "false";
$comparacaoEstrita = ($entrada === 10) ? "true" : "false";

echo "Tipo da entrada: " . gettype($entrada) . "\n";
echo "\$entrada == 10  →  $comparacaoSolta\n";
echo "\$entrada === 10 →  $comparacaoEstrita\n";