<?php

/*
    controlador: show.php
    descripción: Muestra todos los detalles de un alumno, incluida su edad.
    parámetro GET: id
*/

// 1. Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Leer id de la URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

// 3. Crear tabla y cargar alumnos de prueba
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// 4. Obtener posición y alumno
$indice = $tabla_alumnos->getIndiceById($id);
$alumno = $tabla_alumnos->read($indice);

// 5. Obtener cursos y asignaturas
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 6. Incluir vista
require_once __DIR__ . '/views/show.view.php';