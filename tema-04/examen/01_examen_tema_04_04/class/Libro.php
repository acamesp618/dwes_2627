<?php

/*
    Libro.php
    Adrián Campos Espejo
*/

/**
 * Clase Libro
 *
 *
 * @atributos:
 *  - $id
 *  - $titulo
 *  - $fecha_publicacion
 *  - $autor
 *  - $categoria
 *  - $etiqueta
 *  - $numero_paginas
 *  - $stock
 *  - $precio
 *
 */



class Libro
{
    public ?int $id;
    public string $titulo;
    public string $fecha_publicacion;
    public string $autor;
    public ?int $categoria; // Índice de la categoría predefinida
    public array $etiquetas; // Array de etiquetas asignadas
    public int $numero_paginas;
    public int $stock;
    public float $precio;

    // Constructor tipado con valores por defecto
    public function __construct(
        ?int $id = null,
        string $titulo = '',
        string $fecha_publicacion = '',
        string $autor = '',
        ?int $categoria = null,
        array $etiquetas = [],
        int $numero_paginas = 0,
        int $stock = 0,
        float $precio = 0.0
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->etiquetas = $etiquetas;
        $this->numero_paginas = $numero_paginas;
        $this->stock = $stock;
        $this->precio = $precio;
    }
}