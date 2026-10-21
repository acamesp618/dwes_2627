<?php

/*
    libreria : functions.php
    Funciones auxiliares para el proyecto CRUD de libros.

    Funciones incluidas:
        - getLibros(): Devuelve un array con todos los libros creados.
        - obtener_id_nuevo_libro($libros): Devuelve el id del nuevo libro a insertar en el array de libros.
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


// Funcion obtener_id_nuevo_libro()
function obtener_id_nuevo_libro($libros = []) {
    // Obtener el último libro del array
    $ultimo_libro = end($libros);
    
    // Obtener el id del último libro y sumarle 1 para el nuevo libro
    $nuevo_id = $ultimo_libro['id'] + 1;
    
    return $nuevo_id;
}