<?php

//Ejercicio 1: Escribe una función llamada esPositivo que tome un número entero como parámetro y devuelva true si el número es positivo (mayor a cero) y false si es negativo o cero.
//Complejidad: BAJA (1 punto)

function esPositivo($numero){
if ($numero > 1 ) {
    echo $numero; 
}
elseif ($numero < 0) {
    echo $numero; 
}
}


