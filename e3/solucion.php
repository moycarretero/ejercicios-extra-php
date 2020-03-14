<?php

//recogemos el parámetro 'palabra' que nos pasan por la url:
$numero = $_GET['numero'];

//iteramos 10 veces para mostrar la palabra
for ($i=$numero; $i >= 0; $i--) {
    echo $i . "\n";
}
