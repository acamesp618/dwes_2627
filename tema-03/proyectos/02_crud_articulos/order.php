<?php

/**
 * order.php
 *
 * permite ordenar la tabla de los articulos
 *
 * @package    CRUD articulos
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla  articulos:
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
// order.php?criterio=titulo - ordena la tabla de articulos por titulo
$criterio = htmlspecialchars($_GET['criterio'] ?? null);

// Validar el índice recibido

// Cargar el array de articulos
$articulos = get_articulos();

// Ordenar el array de articulos segun el criterio recibido
$array_criterio = array_column($articulos, $criterio);
array_multisort($array_criterio, SORT_ASC, $articulos);

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';



