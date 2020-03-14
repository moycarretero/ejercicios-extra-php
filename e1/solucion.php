<?php

//recogemos el parámetro 'palabra' que nos pasan por la url:
$palabra = $_GET['palabra'];

//iteramos 10 veces para mostrar la palabra
for ($i=0; $i < 10; $i++) {
    echo $palabra . "\n";
}
