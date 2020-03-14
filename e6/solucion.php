<?php

$palabras = ['murciélago', 'arquitecto', 'mesa', 'croquetas', 'lentajas', 'medico', 'calamares', 'adulterio', 'panaderia'];

//esta vez voy a crear una función para sacar la funcionalidad de si tiene todas las vocales o no


$palabrasBuscadas = [];

foreach ($palabras as $palabra) {
    if (tieneTodasLasVocales($palabra)) {
        $palabrasBuscadas[] = $palabra;
    }
}

echo "PALABRAS QUE CONTIENEN TODAS LAS VOCALES: " . implode(', ', $palabrasBuscadas);


function tieneTodasLasVocales(string $palabra): bool {

    $vocales = ['a','e','i','o','u'];

    //convertimos la palabra a minúsculas y eliminamos las tildes para luego buscar las vocales de manera más fácil
    $palabra = str_replace(['á', 'é', 'í', 'ó', 'ú'], $vocales, strtolower($palabra));


    foreach ($vocales as $vocal) {
        //si no encuentra una vocal ya podemos devolver false
        if (strpos($palabra, $vocal) === false) {
            return false;
        }
    }

    //si llegamos hasta aqui es que están todas las vocales y ya podemos devolver true
    return true;
}