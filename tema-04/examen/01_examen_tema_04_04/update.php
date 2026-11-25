<?php

/*
    update.php
    Actualiza un libro existente en el array de libros.
*/

// 1. Cargar clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// 2. Recoger el índice por GET
$indice = (int) $_GET['indice'];

// 3. Recoger datos del formulario ($_POST) con sus tipos correspondientes
$id                = (int) $_POST['id'];
$titulo            = $_POST['titulo'] ?? '';
$fecha_publicacion = $_POST['fecha_publicacion'] ?? '';
$autor             = $_POST['autor'] ?? '';
$categoria         = (int) $_POST['categoria'];
$etiquetas         = $_POST['etiquetas'] ?? [];
$numero_paginas    = (int) ($_POST['numero_paginas'] ?? 0);
$stock             = (int) ($_POST['stock'] ?? 0);
$precio            = (float) ($_POST['precio'] ?? 0.0);

// 4. Crear objeto Libro con los datos actualizados
$libro = new Libro(
    $id,
    $titulo,
    $fecha_publicacion,
    $autor,
    $categoria,
    $etiquetas,
    $numero_paginas,
    $stock,
    $precio
);

// 5. Crear tabla, cargar libros de prueba y actualizar el libro en su posición
$tabla_libros = new TablaLibros();
$tabla_libros->addLibros();

if ($indice !== null) {
    $tabla_libros->update($indice, $libro);
}

// 6. Obtener libros, categorías y etiquetas, y cargar vista principal
$libros     = $tabla_libros->tlibros;
$categorias = TablaLibros::getCategorias();
$etiquetas  = TablaLibros::getEtiquetas();

require_once __DIR__ . '/views/index.view.php';