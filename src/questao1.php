<?php 
$n1 = (int) readline("Digite um número: ");
$n2 = (int) readline("Digite outro número: ");
 
if($n1>$n2){
    echo "O primeiro número é maior ";
}elseif($n2>$n1){
   echo " O segundo número é maior\n" ;
}else {
    echo "Os números são iguais ";
}