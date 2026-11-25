<?php

/**
 * index.php
 *
 * Página principal del proyecto CRUD de libros. Muestra la tabla de libros,
 * permitiendo además ordenar y buscar (ampliaciones opcionales).
 *
 */

// 1. Cargar clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// 2. Instanciar TablaLibros
$tabla_libros = new TablaLibros();

// 3. Cargar libros de prueba
$tabla_libros->addLibros();

// 4. Obtener categorías y etiquetas
$categorias = TablaLibros::getCategorias();
$etiquetas = TablaLibros::getEtiquetas();

// 5. Obtener el array de libros directamente de la propiedad pública
$libros = $tabla_libros->tlibros;

// 6. Incluir la vista
require_once __DIR__ . '/views/index.view.php';