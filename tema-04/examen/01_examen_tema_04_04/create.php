<?php

/*
    create.php
    Añade un nuevo libro al array de libros.
*/

// 1. Cargar clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// 2. Recoger datos de $_POST con sus tipos correspondientes
$titulo            = $_POST['titulo'] ?? '';
$fecha_publicacion = $_POST['fecha_publicacion'] ?? '';
$autor             = $_POST['autor'] ?? '';
$categoria         = (int) $_POST['categoria'];
$etiquetas         = $_POST['etiquetas'] ?? [];
$numero_paginas    = (int) ($_POST['numero_paginas'] ?? 0);
$stock             = (int) ($_POST['stock'] ?? 0);
$precio            = (float) ($_POST['precio'] ?? 0.0);

// 3. Asignar id fijo al nuevo libro
$id = 6;

// 4. Crear objeto Libro con todos los datos
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

// 5. Crear tabla, cargar libros de prueba y añadir el nuevo
$tabla_libros = new TablaLibros();
$tabla_libros->addLibros();
$tabla_libros->create($libro);

// 6. Obtener libros, categorías y etiquetas, y cargar vista principal
$libros     = $tabla_libros->tlibros;
$categorias = TablaLibros::getCategorias();
$etiquetas  = TablaLibros::getEtiquetas();

require_once __DIR__ . '/views/index.view.php';