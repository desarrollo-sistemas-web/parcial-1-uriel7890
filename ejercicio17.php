<?php

//Ejercicio 17: Escribe una función llamada calcularPromedio que tome un arreglo de números como parámetro y devuelva el promedio de esos números. Por ejemplo, si se pasa el arreglo [5, 10, 15, 20], la función debe devolver el valor 12.5.
//Complejidad: MEDIA (2 puntos)

// 🧠 Pista: Existe array_sum para sumar y count para obtener la cantidad de elementos.

function calcularPromedio($numeros) {
    // Tu código aquí

    if(count($numeros) == 0){
        return 0;
    }
    $promedio = array_sum($numeros) / count($numeros);
    return $promedio;

}
