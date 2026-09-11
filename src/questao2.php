<?php
$idade = (int) readline ("\n Qual é a sua idade?: ");
$temIngresso = (string) readline("Você tem ingresso: (s/n)\n" );

$possuiIngresso = ($temIngresso === "s");

$AcessoLiberado = ($idade >=18) && $possuiIngresso;
if ($AcessoLiberado) {
    echo "Entrada liberada\n";
} else {
    echo "Acesso negado\n";
}