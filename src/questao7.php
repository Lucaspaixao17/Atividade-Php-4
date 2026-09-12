<?php

$número1 = readline("Digite o primeiro número de matrícula: ");
$número2 = readline("Digite o segundo número de matrícula: ");

if (strcmp($número1, $número2) < 0 && $número1 < $número2) {
    echo "Como texto strcmp(): $número1 vem primeiro.\n";
    echo "Como operador <: $número1 vem primeiro.\n";
}
elseif (strcmp($número1, $número2) < 0 && !($número1 < $número2)) {
    echo "Como texto strcmp(): $número1 vem primeiro.\n";
    echo "Como operador <: $número2 vem primeiro.\n";
}
elseif (strcmp($número1, $número2) > 0 && $número1 < $número2) {
    echo "Como texto strcmp(): $número2 vem primeiro.\n";
    echo "Como operador <: $número1 vem primeiro.\n";
}
elseif (strcmp($número1, $número2) > 0 && !($número1 < $número2)) {
    echo "Como texto strcmp(): $número2 vem primeiro.\n";
    echo "Como operador <: $número2 vem primeiro.\n";
}
else {
    echo "Os números são iguais.\n";
}