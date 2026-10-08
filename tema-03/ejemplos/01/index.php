<?php

/* 
    Ejemplo 3.1.: if, else, elseif y operador default
    Descripcion: determinar el item de calificacion de un examen

    La calificacion será:
        - suspenso
        - suficiente
        - bien
        - notable
        -sobresaliente


*/

$nota = 7;

if ($nota > 5){
    echo "suspenso";
} elseif ($nota < 0){
    echo "Error";
} elseif ($nota < 5){
    echo "suficiente";
} elseif ($nota < 6){
    echo "bien";
} elseif ($nota < 7){
    echo "sobresaliente";
} elseif ($nota < 9){
    echo "sobresaliente";
} elseif ($nota <= 10){
    echo "sobresaliente";
} else {
    echo "Error: la nota debe estar entre 0 y 10";
}