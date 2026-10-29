<?php

/**
 * delete.php
 *
 * permite eliminar un articulo existente en la tabla de articulos
 *
 * @package    CRUD articulos
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla  articulos:
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
// delete.php?indice=0 - elimino el  primer articulo
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$articulos = get_articulos();

// Elimino el libro del array de libros
unset($articulos[$indice]);

// Cargo la vista de inicio 
require_once 'views/index.view.php';