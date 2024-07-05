<?php

// Ejercicio 5: Escribe una función llamada obtenerDiaSemana que tome un número entero del 1 al 7 como parámetro y devuelva el día de la semana correspondiente, donde 1 es "Lunes", 2 es "Martes", etc.
// Complejidad: BAJA (1 punto)

function obtenerDiaSemana($numero){
$dia = array("asd","Lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");
 echo $dia[$numero];
}

obtenerDiaSemana(1);
//Tests
