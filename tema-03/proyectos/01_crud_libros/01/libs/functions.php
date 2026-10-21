<?php

/*
    libreria : functions.php
    Funciones auxiliares para el proyecto CRUD de libros.

    Funciones incluidas:
        - getLibros(): Devuelve un array con todos los libros creados.
*/

// Funcion get_libros()
function getLibros() {
    // Array de libros (simulando una base de datos)
    $libros = [
        [
            'id' => 1,
            'titulo' => 'Cien Años de Soledad',
            'autor' => 'Gabriel García Márquez',
            'editorial' => 'Editorial Sudamericana',
            'generos' => ['Realismo Mágico', 'Novela'],
            'precio' => 19.99
        ],
        [
            'id' => 2,
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'editorial' => 'Secker & Warburg',
            'generos' => ['Distopía', 'Ciencia Ficción'],
            'precio' => 14.99
        ],
        [
            'id' => 3,
            'titulo' => 'El Principito',
            'autor' => 'Antoine de Saint-Exupéry',
            'editorial' => 'Reynal & Hitchcock',
            'generos' => ['Fábula', 'Literatura Infantil'],
            'precio' => 9.99
        ],
        [
            'id' => 4,
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'editorial' => 'Francisco de Robles',
            'generos' => ['Novela', 'Literatura Clásica'],
            'precio' => 24.99
        ],
        [
            'id' => 5,
            'titulo' => 'La Sombra del Viento',
            'autor' => 'Carlos Ruiz Zafón',
            'editorial' => 'Planeta',
            'generos' => ['Misterio', 'Novela Histórica'],
            'precio' => 17.99
        ]
    ];
    return $libros;
}