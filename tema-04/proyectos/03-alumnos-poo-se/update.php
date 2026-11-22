<?php

/*
    controlador: update.php
    descripción: Actualiza los detalles de un alumno en la tabla.
    parámetro GET: id
*/

// 1. Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Leer id de la URL y resto de datos de $_POST
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;
$curso = isset($_POST['curso']) ? (int) $_POST['curso'] : null;
$asignaturas_seleccionadas = $_POST['asignaturas'] ?? [];

// 3. Crear nuevo objeto Alumno con el mismo id y datos recibidos
$alumno_actualizado = new Alumno(
    $id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas_seleccionadas
);

// 4. Crear tabla y cargar alumnos de prueba
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// 5. Obtener posición con getIndiceById() y sustituir con update()
$indice = $tabla_alumnos->getIndiceById($id);
$tabla_alumnos->update($indice, $alumno_actualizado);

// 6. Obtener alumnos, cursos y asignaturas, y cargar vista principal
$alumnos = $tabla_alumnos->talumnos;
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

require_once __DIR__ . '/views/index.view.php';