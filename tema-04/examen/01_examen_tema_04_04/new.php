<?php

/**
 * new.php
 *
 * Muestra el formulario para añadir un nuevo libro al array de libros.
 *
 */

// 1. Cargar clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// 2. Obtener categorías y etiquetas con los métodos estáticos
$categorias = TablaLibros::getCategorias();
$etiquetas = TablaLibros::getEtiquetas();

// 3. Incluir vista
require_once __DIR__ . '/views/new.view.php';