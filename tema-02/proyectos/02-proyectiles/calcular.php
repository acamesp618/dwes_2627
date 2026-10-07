<?php

/*

controlador.php

    Proyecto: Proyecto 2.2 - calculo lanzamiento de proyectiles
    Descripción: Dada la velocidad inicial y el angulo de lanzamiento, calcular:
        - altura maxima
        - tiempo de vuelo
        - distancia horizontal del proyectil
        - velocidad inicial horizontal
        - velocidad inicial vertical

    Alumno: Adrian Campos Espejo
    Fecha: 06/10/2026

*/

// Modelo

// Negociado
//definir constantes
define("G", 9.81); //gravedad en m/s^2

// Obtenemos los valores del formulario
$velocidad_inicial = (float) $_POST['velocidad_inicial'] ?? 0;
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento'] ?? 0;

// Convertimos el angulo de grados a radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

// Calculamos la velocidad inicial horizontal

$velocidad_inicial_horizontal = $velocidad_inicial * cos($angulo_radianes);

// Calculamos la velocidad inicial vertical
$velocidad_inicial_vertical = $velocidad_inicial * sin($angulo_radianes);

// Calculamos la altura máxima alcanzada 
$altura_max = (pow($velocidad_inicial, 2) * pow(sin($angulo_radianes), 2)) / (2 * G);

// Calculamos el alcance máximo del proyectil
$alcance_max = (pow($velocidad_inicial, 2) * sin(2 * $angulo_radianes)) / G;

// Tiempo total de vuelo
$tiempo_vuelo = (2 * $velocidad_inicial_vertical) / G;

// Formateo de los resultados a 2 decimales
$velocidad_inicial = number_format($velocidad_inicial, 2, ",", ".");
$angulo_lanzamiento = number_format($angulo_lanzamiento, 2, ",", ".");
$angulo_radianes = number_format($angulo_radianes, 2, ",", ".");
$velocidad_inicial_horizontal = number_format($velocidad_inicial_horizontal, 2, ",", ".");
$velocidad_inicial_vertical = number_format($velocidad_inicial_vertical, 2, ",", ".");
$altura_max = number_format($altura_max, 2, ",", ".");
$alcance_max = number_format($alcance_max, 2, ",", ".");
$tiempo_vuelo = number_format($tiempo_vuelo, 2, ",", ".");

// Vista
include 'views/resultado.view.php';