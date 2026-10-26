<?php

/**
 * update.php
 *
 * permite actualizar un articulo existente en la tabla de articulos
 *
 * @package    CRUD articulos
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla  articulos:
    *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    *  - titulo (VARCHAR(255))
    *  - autor (VARCHAR(255))
    *  - updateorial (VARCHAR(255))
    *  - generos 
    *  - precio 

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice del articulo a actualizar desde la URL
// update.php?indice=0 - updateo el  primer articulo
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Cargar el array de articulos
$libros = get_libros();

// Cargo los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$autor = htmlspecialchars($_POST['autor'] ?? '');
$editorial = htmlspecialchars($_POST['editorial'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');


// Crear array asociativo con los datos del libro editado
$edit_book = [
    'id' => $libros[$indice]['id'],
    'titulo' => $titulo,
    'autor' => $autor,
    'editorial' => $editorial,
    'generos' => explode(', ', $generos),
    'precio' => $precio
];

// Actualizo el array de libros
$libros[$indice] = $edit_book;

// Validar el índice recibido


// Cargo la vista de edición con los detalles del articulo a updatear
require_once 'views/index.view.php';



