<?php
require_once __DIR__ . '/../ejercicio7.php';

ob_start();
imprimirNumeros(5);
$salida = ob_get_clean();

// Normalizamos: reemplaza <br>, <br/> o <br /> por \n
$salida = preg_replace('/<br\s*\/?>/i', "\n", $salida);

// Procesamos la salida
$lineas = array_filter(array_map('trim', explode("\n", $salida)));
$esperado = ['1', '2', '3', '4', '5'];

if ($lineas !== $esperado) {
    echo "Fallo: se esperaba [" . implode(", ", $esperado) . "] pero se obtuvo [" . implode(", ", $lineas) . "]\n";
    exit(1);
}

echo "OK\n";