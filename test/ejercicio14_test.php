<?php
require_once __DIR__ . '/../ejercicio14.php';

$casos = [
    [1, false],
    [2, true],
    [3, true],
    [4, false],
    [5, true],
    [9, false],
    [13, true],
    [25, false],
    [29, true],
    [97, true],
];

foreach ($casos as [$input, $esperado]) {
    $resultado = esPrimo($input);
    if ($resultado !== $esperado) {
        echo "Fallo: esPrimo($input) devolvió ";
        var_export($resultado);
        echo ", se esperaba ";
        var_export($esperado);
        echo "\n";
        exit(1);
    }
}

echo "OK\n";
