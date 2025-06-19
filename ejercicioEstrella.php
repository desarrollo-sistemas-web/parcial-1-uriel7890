<?php


/** 
 * ALGORITMO DE LUHN 💳
 * 
 * Luhn fue un científico de IBM que inventó un algoritmo para validar números de tarjetas de crédito y el imei de los teléfonos móviles.
 * Este algoritmo se basa en la suma de los dígitos de la tarjeta y en la multiplicación de los dígitos en posiciones impares.
 * 
 * Las instrucciones para validar una tarjeta de crédito son las siguientes:
 * 
 * 1. Se toman los números de la tarjeta (16 dígitos) y se multiplican por 2 los números que están en las posiciones impares, arrancando el primer dígito de la tarjeta en la posición 1.
 * 2. Si el resultado de la multiplicación es mayor o igual a 10, se suman los dígitos del resultado.
 * 3. Se suman todos los números.
 * 4. Si el resultado de la suma termina en 0, la tarjeta es válida.
 * 
 * Podes ver el ejemplo en la imagen "ejemploTarjeta.png".
 * 
 * 💡 Hint: los valores de una variable se pueden recorrer como si fuera un array. 🤫
 */


 // SI HACES ESTE EJERCICIO, NO HACE FALTA QUE HAGAS LOS DEMAS; VALE POR DIEZ. 🌟


function validarTarjeta($numeroTarjeta) {

}