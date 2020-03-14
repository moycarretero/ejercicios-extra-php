<?php

$numeros = [321,2,45,145,776,456,389,86,555,65,23452,12789,76,4390];

$pares = [];
$impares = [];

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}

//ordeno los arrays y los muestro (ojo que esta función modifica el array que le pasamos como argumento)

sort($pares);
sort($impares);

echo "PARES->  " . implode(', ', $pares) . "\n";
echo "IMPARES->  " . implode(', ', $impares);