<?php
require_once __DIR__ . '/../ejercicioEstrellado.php';

$casos = [
    ["30999035058", true],   // CUIT válido
    ["23375795010", false],   // Otro CUIT válido
    ["20933962335", true],  // Dígito verificador incorrecto
    ["20141658000", true],  // Dígito verificador incorrecto
    ["123", false],          // Demasiado corto
    ["abcdefghijk", false],  // Caracteres inválidos
    ["", false],             // Vacío
];

foreach ($casos as [$entrada, $esperado]) {
    $resultado = validarCUIT($entrada);
    if ($resultado !== $esperado) {
        echo "Fallo: validarCUIT('$entrada') devolvió ";
        var_export($resultado);
        echo ", se esperaba ";
        var_export($esperado);
        echo "\n";
        exit(1);
    }
}

echo "OK\n";