<?php

/**
 * show.php
 *
 * permite mostrar los datos de un libro
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
// Obtener el indice del libro a mostrar desde la URL
// show.php?indice=0 - muestro el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// Obtenemos el libro a mostrar
$libro = $libros[$indice];

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/show.view.php';



