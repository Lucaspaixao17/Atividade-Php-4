<?php
$idade = readline("Digite a idade do atleta: ");

$idade = (int) $idade;

if ($idade < 7) {
    $categoria = "Idade não permitida para inscrição";
} elseif ($idade >= 7 && $idade <= 11) {
    $categoria = "Infantil";
} elseif ($idade >= 12 && $idade <= 16) {
    $categoria = "Juvenil";
} elseif ($idade >= 17 && $idade <= 59) {
    $categoria = "Adulto";
} else {
    $categoria = "Master";
}

echo "Categoria: $categoria\n";