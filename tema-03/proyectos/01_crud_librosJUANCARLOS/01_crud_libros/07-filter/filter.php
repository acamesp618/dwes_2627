<?php

/**
 * filter.php
 *
 * permite filtar la tabla de los libros a partir de una expresion regular
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
// Obtener el prompt de busqueda
// filter.php?prompt=cervantes
$prompt = htmlspecialchars($_GET['prompt'] ?? null);

// Validar la expresion

// Cargar el array de libros
$libros = get_libros();


// Filtrar el array de libros a partir del prompt
$aux = [];
foreach ($libros as $libro) {
    // Recorro cada campo del libro
    if (array_search($prompt, $libro) !== false){
        //Si el libro contiene la expresion de búsqueda, añado el libro al array auxiliar
        $aux[] = $libro;
    }
}

$libros = $aux;

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';



