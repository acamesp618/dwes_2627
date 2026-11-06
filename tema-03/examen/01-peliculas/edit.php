<?php


// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice de la pelicula
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array
$peliculas = get_peliculas();

// Obtenemos la pelicula a editar
$pelicula = $peliculas[$indice];

// Cargo la vista de edición con los detalles del pelicula a editar
require_once 'views/edit.view.php';
