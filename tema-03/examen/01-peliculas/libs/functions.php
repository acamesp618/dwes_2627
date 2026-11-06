<?php

// Función get_peliculas():
function get_peliculas() {
    $peliculas = [
        [
            'id' => 1,
            'titulo' => 'Titanic',
            'idioma' => 'Inglés',
            'director' => 'James Cameron',
            'generos' => ['Drama', 'Romance'],
            'año' => 1997,
            'duracion' => 195,
            'recaudacion' => 28.3,
        ],
        [
            'id' => 2,
            'titulo' => 'Avatar',
            'idioma' => 'Inglés',
            'director' => 'James Cameron',
            'generos' => ['Ciencia ficción', 'Aventura'],
            'año' => 2009,
            'duracion' => 162,
            'recaudacion' => 2325.5,
        ],
        [
            'id' => 3,
            'titulo' => 'El Rey León',
            'idioma' => 'Inglés',
            'director' => 'Roger Allers',
            'generos' => ['Animación', 'Aventura'],
            'año' => 1994,
            'duracion' => 88,
            'recaudacion' => 96.7,
        ],
        [
            'id' => 4,
            'titulo' => 'Joker',
            'idioma' => 'Inglés',
            'director' => 'Todd Phillips',
            'generos' => ['Drama', 'Thriller'],
            'año' => 2019,
            'duracion' => 122,
            'recaudacion' => 55.5,
        ],
        [
            'id' => 5,
            'titulo' => 'Interstellar',
            'idioma' => 'Inglés',
            'director' => 'Christopher Nolan',
            'generos' => ['Ciencia ficción', 'Drama'],
            'año' => 2014,
            'duracion' => 169,
            'recaudacion' => 17.2,
        ],
        [
            'id' => 6,
            'titulo' => 'Oppenheimer',
            'idioma' => 'Inglés',
            'director' => 'Christopher Nolan',
            'generos' => ['Drama', 'Historia'],
            'año' => 2023,
            'duracion' => 180,
            'recaudacion' => 3.5,
        ],
        
    ];

    return $peliculas;
}

// Función obtener_id_nueva_pelicula($peliculas):

function obtener_id_nueva_pelicula($peliculas = []) {
    $ultima_pelicula = end($peliculas);

    $ultimo_id = $ultima_pelicula['id'];

    return $ultimo_id + 1;
}