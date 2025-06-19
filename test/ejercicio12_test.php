<?php
require_once __DIR__ . '/../ejercicio12.php';

$casos = [
    [0, 1],       // por definición, 0! = 1
    [1, 1],
    [2, 2],
    [3, 6],
    [4, 24],
    [5, 120],
    [6, 720],
    [10, 3628800],
];

foreach ($casos as [$input, $esperado]) {
    $resultado = calcularFactorial($input);
    if ($resultado !== $esperado) {
        echo "Fallo: calcularFactorial($input) devolvió $resultado, se esperaba $esperado\n";
        exit(1);
    }
}

echo "OK\n";