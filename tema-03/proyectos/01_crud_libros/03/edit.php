<?php

/**
 * edit.php
 * 
 * Permite editar un libro existente existente en la lista.
 
 * 
 * @package CRUD Libros
 * @author [Tu Nombre]
 * @version 1.0
 * 
 * Tabla libros:
 * - id (INT, PRIMARY KEY, AUTO_INCREMENT)
 * - titulo (VARCHAR(255))
 * - autor (VARCHAR(255))
 * - editorial (VARCHAR(255))
 * - generos (VARCHAR(255))
 * - precio (DECIMAL(10,2))
 * 
 */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice del ibro a editar desde la URL
// edit.php?indice=0 - edito el primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el indice recibido


// Cargar el array de libros
$libros = get_libros();

// Obtenemos el libro a editar
$libro = $libros[$indice];

// Cargo la vista de edicion con los detalles del libro a editar
require_once 'views/edit.view.php';