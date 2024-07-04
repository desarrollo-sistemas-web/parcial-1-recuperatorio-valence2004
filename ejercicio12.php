<?php

// Ejercicio 12: Crea una función llamada calcularPromedioAprobados que tome un arreglo de calificaciones (números enteros) como parámetro y devuelva el promedio de las calificaciones aprobadas. Considera que una calificación aprobada es mayor o igual a 6.

// Complejidad: MEDIA (2 puntos)

function calcularPromedioAprobados($calificaciones){
    //Escribe tu código aquí

}

//Tests

assert(6 == calcularPromedioAprobados([6, 7, 8, 9, 10]), "El promedio de las calificaciones aprobadas es 6");
assert(7 == calcularPromedioAprobados([6, 7, 8, 9, 10, 7]), "El promedio de las calificaciones aprobadas es 7");
assert(7 == calcularPromedioAprobados([6, 7, 8, 9, 10, 7, 7]), "El promedio de las calificaciones aprobadas es 7");
assert(7 == calcularPromedioAprobados([6, 7, 8, 9, 10, 7, 7, 7]), "El promedio de las calificaciones aprobadas es 7");
assert(7 == calcularPromedioAprobados([6, 7, 8, 9, 10, 7, 7, 7, 7]), "El promedio de las calificaciones aprobadas es 7");