<?php

/*
    edit.php
    Carga los datos de un libro existente para mostrarlos en el formulario de edición.
*/

// 1. Cargar clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// 2. Recoger el índice del libro a editar desde $_GET
$indice = isset($_GET['indice']) ? (int) $_GET['indice'] : null;

// 3. Instanciar tabla y cargar libros de prueba
$tabla_libros = new TablaLibros();
$tabla_libros->addLibros();

// 4. Obtener el objeto Libro correspondiente a ese índice
$libro = ($indice !== null) ? $tabla_libros->read($indice) : null;

// Si no existe el libro, volver al listado principal
if ($libro === null) {
    header('Location: index.php');
    exit;
}

// 5. Obtener categorías y etiquetas para rellenar los controles del formulario
$categorias = TablaLibros::getCategorias();
$etiquetas  = TablaLibros::getEtiquetas();

// 6. Cargar la vista del formulario de edición
require_once __DIR__ . '/views/edit.view.php';