<?php

/*
    controlador: edit.php
    descripción: Muestra el formulario de edición de un alumno.
    parámetro GET: id
*/

// 1. Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Leer id de la URL
$id = $_GET['id'] ?? null;

// 3. Crear tabla y cargar alumnos de prueba
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// 4. Obtener posición con getIndiceById() y alumno con read()
$indice = $tabla_alumnos->getIndiceById($id);
$alumno = $tabla_alumnos->read($indice);

// 5. Obtener cursos y asignaturas
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 6. Incluir vista
require_once __DIR__ . '/views/edit.view.php';