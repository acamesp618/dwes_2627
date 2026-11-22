<?php

/*
    controlador: delete.php
    descripción: Elimina un alumno de la tabla a partir de su id.
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

// 4. Obtener posición y eliminar alumno
$indice = $tabla_alumnos->getIndiceById($id);
$tabla_alumnos->delete($indice);

// 5. Obtener alumnos, cursos y asignaturas, y cargar vista principal
$alumnos = $tabla_alumnos->talumnos;
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

require_once __DIR__ . '/views/index.view.php';