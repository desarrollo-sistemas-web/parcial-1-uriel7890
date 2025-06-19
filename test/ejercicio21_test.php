<?php
require_once __DIR__ . '/../ejercicioConvertirAMayusculas.php';

$casos = [
    ["hola", "HOLA"],
    ["Hola Mundo", "HOLA MUNDO"],
    ["123abc", "123ABC"],
    ["", ""],
    ["PHP", "PHP"],
    ["áéíóú", "ÁÉÍÓÚ"], // tildes también deben transformarse
];

foreach ($casos as [$entrada, $esperado]) {
    $resultado = convertirAMayusculas($entrada);
    if ($resultado !== $esperado) {
        echo "Fallo: convertirAMayusculas(";
        var_export($entrada);
        echo ") devolvió $resultado, se esperaba $esperado\n";
        exit(1);
    }
}

echo "OK\n";