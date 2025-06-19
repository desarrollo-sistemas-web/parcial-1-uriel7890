<?php
require_once __DIR__ . '/../ejercicio20.php';

$casos = [
    ["Hola mundo", 4],
    ["", 0],
    ["BCDFG", 0],
    ["aeiou", 5],
    ["AEIOU", 5],
    ["Esto es una prueba", 8],
    ["PHP es divertido", 5],
];

foreach ($casos as [$entrada, $esperado]) {
    $resultado = contarVocales($entrada);
    if ($resultado !== $esperado) {
        echo "Fallo: contarVocales(";
        var_export($entrada);
        echo ") devolvió $resultado, se esperaba $esperado\n";
        exit(1);
    }
}

echo "OK\n";