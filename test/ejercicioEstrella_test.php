<?php
require_once __DIR__ . '/../ejercicioEstrella.php';

$casos = [
    ["4556737586899855", true],   // Visa válida
    ["4485275742308327", true],   // Visa válida
    ["4556737586899856", false],  // Número modificado inválido
    ["1234567812345678", false],  // Claramente inválido
    ["79927398710", false],       // Versión incorrecta
];

foreach ($casos as [$tarjeta, $esperado]) {
    $resultado = validarTarjeta($tarjeta);
    if ($resultado !== $esperado) {
        echo "Fallo: validarTarjeta('$tarjeta') devolvió ";
        var_export($resultado);
        echo ", se esperaba ";
        var_export($esperado);
        echo "\n";
        exit(1);
    }
}

echo "OK\n";