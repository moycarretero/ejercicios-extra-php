<?php
//recogemos el parámetro 'palabra' que nos pasan por la url:
$numero = $_GET['numero'];

//lo que muestra el triangulo son números impares

for ($i=1; $i <= $numero; $i++) {
    for ($j=$i*2; $j >= 1; $j--){
        if ($j % 2 == 1)
        echo "$j ";
    }
    echo "\n";
}
