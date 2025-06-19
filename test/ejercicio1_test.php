<?php
require_once __DIR__ . '/../ejercicio1.php';

// Captura la salida
ob_start();
saludar("Juan");
$salida = trim(ob_get_clean());

$esperado = "Hola, Juan!";

if ($salida !== $esperado) {
    echo "Fallo: se esperaba '$esperado' pero se obtuvo '$salida'\n";
    exit(1);
}

echo "OK\n";