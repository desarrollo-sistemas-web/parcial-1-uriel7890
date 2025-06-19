<?php
require_once __DIR__ . '/../ejercicio15.php';

$casos = [
    ["Hola mundo, bienvenidos", ["Hola", "bienvenidos"], ["Hola", "bienvenidos"]],
    ["Esto es una prueba", ["prueba", "esto"], ["prueba"]],
    ["PHP es genial", ["PHP", "Java", "genial"], ["PHP", "genial"]],
    ["sin coincidencias", ["nada", "aquí"], []],
    ["Hola hola HOLA", ["Hola"], ["Hola"]],
];

foreach ($casos as [$cadena, $buscar, $esperado]) {
    $resultado = encontrarPalabras($cadena, $buscar);
    if ($resultado !== $esperado) {
        echo "Fallo: encontrarPalabras('$cadena', ";
        var_export($buscar);
        echo ") devolvió ";
        var_export($resultado);
        echo ", se esperaba ";
        var_export($esperado);
        echo "\n";
        exit(1);
    }
}

echo "OK\n";