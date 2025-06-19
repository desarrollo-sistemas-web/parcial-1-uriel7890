<?php
require_once __DIR__ . '/../ejercicio13.php';

$casos = [
    ["Hola mundo", "o", 2],
    ["banana", "a", 3],
    ["banana", "b", 1],
    ["banana", "z", 0],
    ["PHP", "P", 2],
    ["", "x", 0],
];

foreach ($casos as [$cadena, $caracter, $esperado]) {
    $resultado = contarCaracteres($cadena, $caracter);
    if ($resultado !== $esperado) {
        echo "Fallo: contarCaracteres('$cadena', '$caracter') devolvió $resultado, se esperaba $esperado\n";
        exit(1);
    }
}

echo "OK\n";