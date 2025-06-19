<?php
require_once __DIR__ . '/../ejercicio19.php';

$casos = [
    [[1, 5, 10, 3], 4, [5, 10]],
    [[10, 20, 30], 25, [30]],
    [[-5, -1, 0, 1], 0, [1]],
    [[100, 200, 300], 500, []],
    [[], 10, []],
];

foreach ($casos as [$entrada, $umbral, $esperado]) {
    $resultado = obtenerMayoresQue($entrada, $umbral);
    if ($resultado !== $esperado) {
        echo "Fallo: obtenerMayoresQue(";
        var_export($entrada);
        echo ", $umbral) devolvió ";
        var_export($resultado);
        echo ", se esperaba ";
        var_export($esperado);
        echo "\n";
        exit(1);
    }
}

echo "OK\n";