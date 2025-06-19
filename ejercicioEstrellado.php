<?php

// Ejercicio Estrellado 🥚🍳
// Crea una función llamada validarCUIT que tome un número de CUIT como string (11 dígitos) y devuelva true si es válido, o false si no lo es.
// El algoritmo de validación usa el método del Módulo 11.
//
// Paso a paso:
// 1. Multiplicá los primeros 10 dígitos del CUIT por los siguientes pesos (de izquierda a derecha): [5,4,3,2,7,6,5,4,3,2]
// 2. Sumá todos los productos.
// 3. Calculá el resto de dividir esa suma por 11.
// 4. Restale ese resto a 11. El resultado es el dígito verificador esperado (último dígito).
// 5. Si el resultado es 11, el dígito verificador debe ser 0. Si es 10, el CUIT es inválido.
//
// Ejemplos válidos: "20 93396233 6", "27 12345678 5"
// Ejemplos inválidos: "20 93396233 5", "27 12345678 9"

function validarCUIT($cuit){
    //Tu código aquí
}