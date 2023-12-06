<?php

$peso = 70;
$altura = 1.70;
$imc = $peso / $altura ** 2;

echo "O seu imc é: $imc";

echo "Você está acima do peso!".PHP_EOL;

if($imc > 24) {
    echo "seu imc é tal";
    echo "é 24";
}


//  Próximos passos: Adicionar as frases:
// Seu imc está normal (entre 18,6 e 24,9)
// Você está com sobrepeso (entre 25 e 29,9) /*