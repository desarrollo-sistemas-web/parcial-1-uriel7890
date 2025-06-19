<?php
ob_start();
require_once __DIR__ . '/../ejercicio8.php';
$salida = ob_get_clean();

// Normaliza: reemplaza <br>, <br/> o <br /> por \n
$salida = preg_replace('/<br\s*\/?>/i', "\n", $salida);

// Procesa líneas
$lineas = array_filter(array_map('trim', explode("\n", $salida)));
$esperado = range(1, 10);
$obtenido = array_map('intval', $lineas);

if ($obtenido !== $esperado) {
    echo "Fallo: se esperaba [" . implode(", ", $esperado) . "] pero se obtuvo [" . implode(", ", $obtenido) . "]\n";
    exit(1);
}

echo "OK\n";