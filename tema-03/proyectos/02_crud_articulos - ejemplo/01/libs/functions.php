<?php

/*
    libreria : functions.php
    Funciones auxiliares para el proyecto CRUD de libros.

    Funciones incluidas:
        - getLibros(): Devuelve un array con todos los libros creados.
*/

// Funcion get_libros()
function get_articulos() {
    // Array de libros (simulando una base de datos)
    $articulos = [
        [
            'id'          => 1,
            'descripcion' => 'Portátil - HP 15-DB0074NS',
            'modelo'      => 'HP 15-DB0074NS',
            'categorias'   => ['Portátil', 'Informática'],
            'unidades'    => 120,
            'precio'      => 379.00
        ],
        [
            'id'          => 2,
            'descripcion' => 'Portátil AMD A4-9125, 8 GB RAM, 125 GB',
            'modelo'      => 'HP 255 G7, 15.6',
            'categorias'   => ['Portátil', 'Informática'],
            'unidades'    => 200,
            'precio'      => 20.50
        ],
        [
            'id'          => 3,
            'descripcion' => 'PC sobremesa - Lenovo Intel® Core™ i3-8100',
            'modelo'      => 'ideacentre 510S-07ICB',
            'categorias'   => ['PC sobremesa', 'Informática'],
            'unidades'    => 50,
            'precio'      => 12.95
        ],
        [
            'id'          => 4,
            'descripcion' => 'PC Sobremesa - HP 290 APU AMD Dual-Core A6',
            'modelo'      => 'HP 290-a0002ns',
            'categorias'   => ['PC sobremesa', 'Informática'],
            'unidades'    => 35,
            'precio'      => 15.95
        ],
        [
            'id'          => 5,
            'descripcion' => 'Impresora Multifunción HP DeskJet 2720e',
            'modelo'      => '2720e',
            'categorias'   => ['Impresora', 'Informática'],
            'unidades'    => 80,
            'precio'      => 49.99
        ]
    ];
    return $articulos;
}