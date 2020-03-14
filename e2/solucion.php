<?php

//recogemos el parámetro 'numero' que nos pasan por la url:
$numero = $_GET['numero'];

//mostramos los números impares (versión con el bucle while)
$num = 1;
$numeros = [];

while ($num <= $numero) {
    if ($num % 2 == 1) {
        //meto en el array de número el número impar
        $numeros[] = $num;
    }
    $num++;
}

echo "Los números impares son: " . implode(',', $numeros);


//(versión bucle for)

//mostramos los números impares (versión con el bucle while)
/*$num = 1;
$numeros = [];

for ($i=1; $i < $numero; $i++) {
    if ($i % 2 == 1) {
        //meto en el array de número el número impar
        $numeros[] = $i;
    }
}

echo "Los números impares son: " . implode(',', $numeros);*/