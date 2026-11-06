<?php


// Cargar librerias
require_once 'libs/functions.php';


// Extraemos los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$idioma = htmlspecialchars($_POST['idioma'] ?? '');
$director = htmlspecialchars($_POST['director'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$año = htmlspecialchars($_POST['año'] ?? '');
$duracion = htmlspecialchars($_POST['duracion'] ?? '');
$recaudacion = htmlspecialchars($_POST['recaudacion'] ?? '');



$peliculas = get_peliculas();


$nueva_pelicula_id = obtener_id_nueva_pelicula($peliculas);

// Crear array asociativo
$nueva_pelicula = [
    'id' => $nueva_pelicula_id,
    'titulo' => $titulo,
    'idioma' => $idioma,
    'director' => $director,
    'generos' => explode(', ', $generos),
    'año' => $año,
    'duracion' => $duracion,
    'recaudacion' => $recaudacion,
];

// Actualizo el array 
$peliculas[] = $nueva_pelicula;



// Views
include 'views/index.view.php';


