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
$altura_maxima = pow($velocidad_inicial, 2) * 

// Vista
include 'views/calculos.view.php';