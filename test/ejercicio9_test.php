<?php
require_once __DIR__ . '/../ejercicio9.php';

ob_start();
generarTablaMultiplicar(3);
$salida = ob_get_clean();

// Normaliza saltos de línea
$salida = preg_replace('/<br\s*\/?>/i', "\n", $salida);

// Procesa los resultados
$lineas = array_filter(array_map('trim', explode("\n", $salida)));
$esperado = [];
for ($i = 1; $i <= 10; $i++) {
    $esperado[] = $i * 3;
}
$obtenido = array_map('intval', $lineas);

if ($obtenido !== $esperado) {
    echo "Fallo: se esperaba [" . implode(", ", $esperado) . "] pero se obtuvo [" . implode(", ", $obtenido) . "]\n";
    exit(1);
}

echo "OK\n";