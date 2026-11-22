<?php

/**
 * new.php
 *
 * Muestra el formulario para añadir un nuevo alumno al array de alumnos.
 */

// 1. Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Obtener cursos y asignaturas con los métodos estáticos
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 3. Incluir vista
require_once __DIR__ . '/views/new.view.php';