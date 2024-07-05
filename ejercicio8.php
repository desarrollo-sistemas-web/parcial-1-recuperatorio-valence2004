<?php

// Ejercicio 8:  Crea una función llamada calcularPromedio que tome un arreglo de números como parámetro y devuelva el promedio de esos números.
// Complejidad: BAJA (1 punto)

function calcularPromedio($numeros){
    $cantidad = count($numeros);
    $sum = array_sum($numeros);

    echo  $sum/$cantidad ;

    
}    

calcularPromedio([2,3,4,5]);
//Tests
