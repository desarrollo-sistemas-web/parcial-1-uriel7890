<?php
require_once __DIR__ . '/../ejercicioGenerarSecuencia.php';

$casos = [
    [5, [1, 2, 3, 4, 5]],
    [1, [1]],
    [0, []],
    [3, [1, 2, 3]],
    [10, [1,2,3,4,5,6,7,8,9,10]],
];

foreach ($casos as [$entrada, $esperado]) {
    $resultado = generarSecuencia($entrada);

    if ($resultado !== $esperado) {
        echo "Fallo: generarSecuencia($entrada) devolvió ";
        var_export($resultado);
        echo ", se esperaba ";
        var_export($esperado);
        echo "\n";
        exit(1);
    }
}

echo "OK\n";