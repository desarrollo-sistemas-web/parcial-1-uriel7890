<?php
// Capturamos la salida de ejecutar el archivo corregido por el estudiante
ob_start();
require_once __DIR__ . '/../ejercicio2.php';
$salida = trim(ob_get_clean());

$esperado = "La suma es: 15";

if ($salida !== $esperado) {
    echo "Fallo: se esperaba '$esperado' pero se obtuvo '$salida'\n";
    exit(1);
}

echo "OK\n";