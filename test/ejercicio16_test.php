<?php
require_once __DIR__ . '/../ejercicio16.php';

$casos = [
    [[1, 2, 3, 4], [4, 3, 2, 1]],
    [[], []],
    [["a", "b", "c"], ["c", "b", "a"]],
    [[10], [10]],
    [[true, false], [false, true]],
];

foreach ($casos as [$entrada, $esperado]) {
    $resultado = invertirArray($entrada);
    if ($resultado !== $esperado) {
        echo "Fallo: invertirArray(";
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