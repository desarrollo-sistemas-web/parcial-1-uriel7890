<?php
require_once __DIR__ . '/../ejercicio18.php';

$casos = [
    [6, 3, true],
    [10, 5, true],
    [7, 2, false],
    [0, 1, true],
    [1, 0, false], // División por cero, podrías manejarlo como caso especial en la función
    [0, 0, false], // Otro caso especial si querés evitar errores
];

foreach ($casos as [$a, $b, $esperado]) {
    $resultado = @esMultiplo($a, $b); // @ para evitar warning si hay división por cero
    if ($resultado !== $esperado) {
        echo "Fallo: esMultiplo($a, $b) devolvió ";
        var_export($resultado);
        echo ", se esperaba ";
        var_export($esperado);
        echo "\n";
        exit(1);
    }
}

echo "OK\n";