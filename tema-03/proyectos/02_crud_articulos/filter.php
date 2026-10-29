<?php

/**
 * filter.php
 *
 * permite filtar la tabla de los articulos a partir de una expresion regular
 *
 * @package    CRUD articulos
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla  articulos:
 *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
 * - descripcion
 * - modelo
 * - categoria
 * - unidades
 * - precio (DECIMAL(10,2))

 */

// Cargar librerias
require_once 'libs/functions.php';


// Negociado
// Obtener el prompt de busqueda
// filter.php?prompt=Portatil
$prompt = htmlspecialchars($_GET['prompt'] ?? null);

// Validar la expresion

// Cargar el array de articulos
$articulos = get_articulos();


// Filtrar el array de articulos a partir del prompt
$aux = [];
foreach ($articulos as $articulo) {
    // Recorro cada campo del articulo
    if (array_search($prompt, $articulo) !== false) {
        //Si el articulo contiene la expresion de búsqueda, añado el articulo al array auxiliar
        $aux[] = $articulo;
    }
}

$articulos = $aux;

// Cargo la vista de edición con los detalles del articulo a editar
require_once 'views/index.view.php';
