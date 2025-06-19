<?php
require_once __DIR__ . '/../ejercicio3.php';

$tests = [
    0 => true,
    1 => false,
    2 => true,
    3 => false,
    4 => true,
    -2 => true,
    -3 => false,
];

foreach ($tests as $entrada => $esperado) {
    $resultado = esPar($entrada);
    if ($resultado !== $esperado) {
        echo "Fallo: esPar($entrada) debería ser ";
        echo $esperado ? "true" : "false";
        echo ", pero devolvió ";
        echo $resultado ? "true" : "false";
        echo "\n";
        exit(1);
    }
}

echo "OK\n";