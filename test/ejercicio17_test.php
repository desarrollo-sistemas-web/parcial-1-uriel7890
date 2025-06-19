<?php
require_once __DIR__ . '/../ejercicio17.php';

$casos = [
    [[5, 10, 15, 20], 12.5],
    [[1, 2, 3], 2],
    [[0, 0, 0], 0],
    [[100], 100],
    [[], 0],
];

foreach ($casos as [$entrada, $esperado]) {
    $resultado = calcularPromedio($entrada);
    if (abs($resultado - $esperado) > 0.0001) {
        echo "Fallo: calcularPromedio(";
        var_export($entrada);
        echo ") devolvió $resultado, se esperaba $esperado\n";
        exit(1);
    }
}

echo "OK\n";