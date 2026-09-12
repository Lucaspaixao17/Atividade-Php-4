<?php
$nome = readline("Nome do cliente: ");
$idade = (int) readline("Idade: ");
$rendaMensal = (float) readline("Renda mensal: ");
$tempoEmprego = (int) readline("Tempo de emprego (meses): ");
$negativado = readline("Está negativado? (s/n): ");

$idadePermitida = ($idade >= 18 && $idade <= 65);

$rendaOuEstabilidade = ($rendaMensal >= 2000 || $tempoEmprego >= 24);

$estaNegativado = (strtolower($negativado) === "s");

$creditoAprovado = ($idadePermitida && $rendaOuEstabilidade) && (!$estaNegativado);

echo "Idade permitida: " . ($idadePermitida ? "atendida" : "não atendida") . "\n";
echo "Renda ou estabilidade: " . ($rendaOuEstabilidade ? "atendida" : "não atendida") . "\n";
echo "Nome limpo: " . (!$estaNegativado ? "atendida" : "não atendida") . "\n";

if ($creditoAprovado) {
    echo "Resultado: Crédito aprovado para $nome\n";
} else {
    echo "Resultado: Crédito não aprovado para $nome\n";
}