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
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

//Realizar la operacion de suma
$resultado = $valor1 + $valor2;

$operacion = "Suma";

// Vista
include 'views/resultado.view.php';