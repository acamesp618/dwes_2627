<?php

/**
 * edit.php
 *
 * permite editar un libro existente en la tabla de libros
 *
 * @package    CRUD Libros
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla  libros:
    *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    *  - titulo (VARCHAR(255))
    *  - autor (VARCHAR(255))
    *  - editorial (VARCHAR(255))
    *  - generos 
    *  - precio 

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice del libro a editar desde la URL
// edit.php?indice=0 - edito el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$articulos = get_articulos();

// Obtenemos el libro a editar
$articulo = $articulos[$indice];

// Obtener el array de categorías para el desplegable
$categorias = generar_tabla_categorias();

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/edit.view.php';