<?php

/*
    libreria : funciones_articulos.php
    Funciones auxiliares para el proyecto CRUD de articulos.

    Funciones incluidas:
        - get_articulos(): Devuelve un array con todos los articulos creados.
        - generar_tabla_categorias(): Devuelve un array con todas las categorias
*/

// Funcion get_articulos()
function get_articulos()
{
    // Array de libros (simulando una base de datos)
    $articulos = [
        [
            'id'          => 1,
            'descripcion' => 'Portátil - HP 15-DB0074NS',
            'modelo'      => 'HP 15-DB0074NS',
            'categoria'   => 'Portátil',
            'unidades'    => 120,
            'precio'      => 379.00
        ],
        [
            'id'          => 2,
            'descripcion' => 'Portátil AMD A4-9125, 8 GB RAM, 125 GB',
            'modelo'      => 'HP 255 G7, 15.6',
            'categoria'   => 'Portátil',
            'unidades'    => 200,
            'precio'      => 20.50
        ],
        [
            'id'          => 3,
            'descripcion' => 'PC sobremesa - Lenovo Intel® Core™ i3-8100',
            'modelo'      => 'ideacentre 510S-07ICB',
            'categoria'   => 'PC sobremesa',
            'unidades'    => 50,
            'precio'      => 12.95
        ],
        [
            'id'          => 4,
            'descripcion' => 'PC Sobremesa - HP 290 APU AMD Dual-Core A6',
            'modelo'      => 'HP 290-a0002ns',
            'categoria'   => 'PC sobremesa',
            'unidades'    => 35,
            'precio'      => 15.95
        ],
        [
            'id'          => 5,
            'descripcion' => 'Impresora Multifunción HP DeskJet 2720e',
            'modelo'      => '2720e',
            'categoria'   => 'Impresora',
            'unidades'    => 80,
            'precio'      => 49.99
        ]
    ];
    return $articulos;
}

//Funcion generar_tabla_categorias
function generar_tabla_categorias()
{
    return ['Portátil', 'PC sobremesa', 'Componente', 'Pantalla', 'Impresora'];
}

// Funcion get_indice_articulo_por_id
function get_indice_articulo_por_id($articulos, $id)
{
    foreach ($articulos as $indice => $articulo) {
        if ($articulo['id'] == $id) {
            return $indice;
        }
    }
    return false;
}
