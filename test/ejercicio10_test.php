<?php
require_once __DIR__ . '/../ejercicio10.php';

$tests = [
    [[2, 3], 6],
    [[1, 4, 5], 20],
    [[10], 10],
    [[2, 2, 2, 2], 16],
    [[], 1], // caso vacío
];

foreach ($tests as [$entrada, $esperado]) {
    $resultado = multiplicarNumeros(...$entrada);
    if ($resultado !== $esperado) {
        echo "Fallo: multiplicarNumeros(" . implode(", ", $entrada) . ") devolvió $resultado, se esperaba $esperado\n";
        exit(1);
    }
}

echo "OK\n";