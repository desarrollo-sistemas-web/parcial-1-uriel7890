<?php
require_once __DIR__ . '/../ejercicio22.php';

$casos = [
    [[1, 2, 2, 3, 3, 3, 4], 3],
    [[10, 10, 10, 5, 5, 2], 10],
    [[7], 7],
];

foreach ($casos as [$entrada, $esperado]) {
    $resultado = numeroMasFrecuente($entrada);
    
    if (empty($entrada) && $resultado !== null) {
        echo "Fallo: Se esperaba null para arreglo vacío\n";
        exit(1);
    }

    // Si hay empate, aceptamos varios valores válidos
    if ($entrada === [5, 6, 5, 6]) {
        if (!in_array($resultado, [5, 6])) {
            echo "Fallo: En empate, se esperaba 5 o 6 y se obtuvo $resultado\n";
            exit(1);
        }
    } elseif ($resultado !== $esperado) {
        echo "Fallo: numeroMasFrecuente(";
        var_export($entrada);
        echo ") devolvió $resultado, se esperaba $esperado\n";
        exit(1);
    }
}

echo "OK\n";