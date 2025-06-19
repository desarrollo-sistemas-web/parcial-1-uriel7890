<?php
require_once __DIR__ . '/../ejercicio11.php';

$casos = [
    ["Hola", "aloH"],
    ["", ""],
    ["12345", "54321"],
    ["reconocer", "reconocer"],
    ["PHP", "PHP"],
];

foreach ($casos as [$input, $esperado]) {
    $resultado = invertirCadena($input);
    if ($resultado !== $esperado) {
        echo "Fallo: invertirCadena('$input') devolvió '$resultado', se esperaba '$esperado'\n";
        exit(1);
    }
}

echo "OK\n";