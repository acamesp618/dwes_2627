<?php

/**
 * delete.php
 *
 * permite eliminar un libro existente en la tabla de libros
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


// Negociado
// Obtener el indice del libro a eliminar desde la URL
// delete.php?indice=0 - elimino el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// Elimino el libro del array de libros
unset($libros[$indice]);

// Cargo la vista de inicio 
require_once 'views/index.view.php';



