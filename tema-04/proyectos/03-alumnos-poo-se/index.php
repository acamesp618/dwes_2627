<?php

/**
 * index.php
 *
 * Página principal del proyecto CRUD de alumnos. Muestra la tabla de alumnos,
 * permitiendo además ordenar y buscar (ampliaciones opcionales).
 *
 * @package    CRUD Alumnos
 * @author     Adrián Campos Espejo
 * @version    1.0
 */

// 1. Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Instanciar TablaAlumnos
$tabla_alumnos = new TablaAlumnos();

// 3. Cargar alumnos de prueba
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// 4. Obtener cursos y asignaturas
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// Ampliación opcional: Buscar por nombre, apellidos o curso
$criterio = $_GET['buscar'] ?? null;
if ($criterio) {
    $tabla_alumnos->talumnos = array_filter($tabla_alumnos->talumnos, function ($alumno) use ($criterio, $cursos) {
        return stripos($alumno->nombre, $criterio) !== false ||
               stripos($alumno->apellidos, $criterio) !== false ||
               stripos($cursos[$alumno->curso], $criterio) !== false;
    });
}

// Ampliación opcional: Ordenar por apellidos, edad o curso
$orden = $_GET['orden'] ?? null;
if ($orden) {
    usort($tabla_alumnos->talumnos, function ($a, $b) use ($orden, $cursos) {
        return match ($orden) {
            'apellidos' => strcmp($a->apellidos, $b->apellidos),
            'edad' => $a->getEdad() <=> $b->getEdad(),
            'curso' => strcmp($cursos[$a->curso], $cursos[$b->curso]),
            default => 0,
        };
    });
}

// 5. Obtener el array de alumnos directamente de la propiedad pública
$alumnos = $tabla_alumnos->talumnos;

// 6. Incluir la vista
require_once __DIR__ . '/views/index.view.php';