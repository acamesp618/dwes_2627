<?php

/**
 * order.php
 *
 * permite ordenar la tabla de los libros
 *
 * @package    CRUD Libros
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla  libros:
    *  - id 
    *  - titulo 
    *  - autor 
    *  - editorial 
    *  - generos 
    *  - precio 

*/

// Cargar librerias
require_once 'libs/functions.php';


// Negociado
// Obtener el criterio de ordenación siempres ASCENDENTE
// order.php?criterio=titulo - ordena la tabla de libros por titulo
$criterio = htmlspecialchars($_GET['criterio'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// Ordenar el array de libros segun el criterio recibido
$array_criterio = array_column($libros, $criterio);
array_multisort($array_criterio, SORT_ASC, $libros);

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';



