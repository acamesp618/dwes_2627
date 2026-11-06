<?php


// Cargar librerias
require_once 'libs/functions.php';

// Negociado
// Obtener el indice de la pelicula
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Cargar el array
$peliculas = get_peliculas();

// Cargo los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$idioma = htmlspecialchars($_POST['idioma'] ?? '');
$director = htmlspecialchars($_POST['director'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$año = htmlspecialchars($_POST['año'] ?? '');
$duracion = htmlspecialchars($_POST['duracion'] ?? '');
$recaudacion = htmlspecialchars($_POST['recaudacion'] ?? '');


// Crear array asociativo
$editar_pelicula = [
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
$peliculas[$indice] = $editar_pelicula;


// Views
require_once 'views/index.view.php';



