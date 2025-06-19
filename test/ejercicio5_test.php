<?php
require_once __DIR__ . '/../ejercicio5.php';

$casos = [
    [[1, 2, 3], 6],
    [[-1, 1, 0], 0],
    [[10], 10],
    [[], 0],
    [[100, 200, 300], 600],
];

foreach ($casos as [$entrada, $esperado]) {
    $resultado = suma($entrada);
    if ($resultado !== $esperado) {
        echo "Fallo: suma(" . json_encode($entrada) . ") debería ser $esperado, pero devolvió $resultado\n";
        exit(1);
    }
}

echo "OK\n";