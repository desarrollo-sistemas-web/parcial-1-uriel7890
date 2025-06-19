<?php
require_once __DIR__ . '/../ejercicioFiltrarPares.php';

$casos = [
    [[1, 2, 3, 4, 5, 6], [2, 4, 6]],
    [[0, 7, 9, 10], [0, 10]],
    [[1, 3, 5], []],
    [[2, 4, 6, 8], [2, 4, 6, 8]],
    [[], []],
];

foreach ($casos as [$entrada, $esperado]) {
    $resultado = filtrarPares($entrada);

    if ($resultado !== $esperado) {
        echo "Fallo: filtrarPares(";
        var_export($entrada);
        echo ") devolvió ";
        var_export($resultado);
        echo ", se esperaba ";
        var_export($esperado);
        echo "\n";
        exit(1);
    }
}

echo "OK\n";