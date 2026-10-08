<?php

/*
    Actividad: 2.1.3
    Descripción: Concatenación de dos cadenas string en una nueva variable.
    Alumno: Adrian Campos Espejo
    Fecha: 25/09/2026
*/

$cadena1 = "Hola, mi nombre es Adrián Campos Espejo";
$cadena2 = "y estoy cursando 2º de DAW en el módulo DWES.";

// Concatenación usando el operador .
$resultado = $cadena1 . " " . $cadena2;

// Vista de la aplicación - HTML
include "view.index.php";