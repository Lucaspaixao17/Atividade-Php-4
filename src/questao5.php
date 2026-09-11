<?php
$aluno = (string) readline("Qual é seu nome: ");
$nota = (float) readline("Primeira nota: ");
$nota2 = (float) readline("Segunda nota: ");
$nota3 = (float) readline("Terceira nota: ");

$media = ($nota + $nota2 + $nota3 /3);

$aprovado = ($media>=7);
$recuperacao = ($media>=5 && $media <7);

if ($aprovado) {
    $situacao = "Aprovado";
} elseif ($recuperacao) {
    $situacao = "Recuperação";
} else {
    $situacao = "Reprovado";
}

echo "Aluno: $aluno \n";
echo "Média: " . number_format($media, 2, ".", ",") . "\n";
echo "Situação: $situacao\n";