<?php

/*

controlador.php

    Proyecto: Proyecto 2.1 - calculadora básica
    Descripción: Calculadora de operaciones básicas
        - suma
        - resta
        - multiplicación
        - división
        - potencia
        - ...
    Alumno: Adrian Campos Espejo
    Fecha: 05/10/2026

*/

// Modelo

// Negociado
//Recoger los valores del formularios
$valor1 = (float) $_POST['valor1'];
$valor2 = (float) $_POST['valor2'];

//Realizar la operacion de resta
$resultado = $valor1 - $valor2;

$operacion = "Resta";

// Vista
include 'views/resultado.view.php';