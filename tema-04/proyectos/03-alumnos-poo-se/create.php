<?php

/*
    controlador: create.php
    descripción: Añade un nuevo alumno al array de alumnos.
*/

// 1. Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Recoger datos de $_POST
$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;
$curso = isset($_POST['curso']) ? (int) $_POST['curso'] : null;
$asignaturas_seleccionadas = $_POST['asignaturas'] ?? [];

// 3. Asignar id fijo al nuevo alumno
$id = 5;

// 4. Crear objeto Alumno con todos los datos
$alumno = new Alumno(
    $id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas_seleccionadas
);

// 5. Crear tabla, cargar alumnos de prueba y añadir el nuevo
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();
$tabla_alumnos->create($alumno);

// 6. Obtener alumnos, cursos y asignaturas, y cargar vista principal
$alumnos = $tabla_alumnos->talumnos;
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

require_once __DIR__ . '/views/index.view.php';