<?php
$usuarioTrue = "Lucas";
$senhaTrue   = "Gabrielfalso01";

$usuario = (string) readline("Digite um usuário: ");
$senha   = (string) readline("Digite uma senha: ");

$loginValido = (strcasecmp($usuario, $usuarioTrue) === 0) && ($senha === $senhaTrue);

if (!$loginValido) {
    echo "Usuário ou senha inválidos.\n";
} else {
    echo "Bem vindo Lucas!\n";
}
?>