<?php
ob_start();
require_once __DIR__ . '/../ejercicio6.php';
$salida = trim(ob_get_clean());

if ($salida !== "naranja") {
    echo "Fallo: se esperaba 'naranja' pero se obtuvo '$salida'\n";
    exit(1);
}

echo "OK\n";