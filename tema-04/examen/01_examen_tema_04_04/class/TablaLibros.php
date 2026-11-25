<?php

/*
    Archivo: TablaLibros.php
    Descripción: Clase TablaLibros, gestiona un array de objetos de la clase Libro.
    Características: POO sin encapsulamiento.
*/

class TablaLibros
{
    public array $tlibros;

    public function __construct()
    {
        $this->tlibros = [];
    }

    /**
     * Devuelve el array de categorías disponibles.
     */
    public static function getCategorias(): array
    {
        return [
            0 => 'Ficción',
            1 => 'Ciencia Ficción',
            2 => 'Fantasía',
            3 => 'Historia',
            4 => 'Programación',
            5 => 'Novela Negra'
        ];
    }

    /**
     * Devuelve el array de etiquetas disponibles.
     */
    public static function getEtiquetas(): array
    {
        return [
            0 => 'Novedad',
            1 => 'Bestseller',
            2 => 'Recomendado',
            3 => 'Edición Especial',
            4 => 'Clásico',
            5 => 'Oferta'
        ];
    }

    /**
     * Actualiza el array de libros con al menos 5 libros de ejemplo.
     */
    public function addLibros(): void
    {
        $this->tlibros = [
            new Libro(1, 'El Quijote', '1612-06-25', 'Miguel de Cervantes', 0, [2, 4], 863, 15, 24.95),
            new Libro(2, 'Dune', '1989-04-25', 'Feliciano Martinez', 1, [1, 2, 4], 688, 8, 22.50),
            new Libro(3, 'El Nombre del Viento', '2004-03-31', 'Mario Lopez', 2, [1, 2], 880, 12, 23.90),
            new Libro(4, 'Asi es la vida', '2025-08-01', 'Adrian Campos', 4, [2, 3], 464, 5, 39.99),
            new Libro(5, 'La Sombra del Viento', '2000-04-12', 'Carlos Ruiz Zafón', 5, [0, 1, 5], 576, 20, 19.95)
        ];
    }

    /**
     * Añade un libro al final del array.
     */
    public function create(Libro $libro): void
    {
        $this->tlibros[] = $libro;
    }

    /**
     * Devuelve el objeto Libro situado en esa posición, o null si no existe.
     */
    public function read(int $indice): ?Libro
    {
        return $this->tlibros[$indice] ?? null;
    }

    /**
     * Sustituye el libro de esa posición por el objeto recibido.
     */
    public function update(int $indice, Libro $libro): void
    {
        $this->tlibros[$indice] = $libro;
    }

    /**
     * Elimina el libro de esa posición y reindexa el array con array_values().
     */
    public function delete(int $indice): void
    {
        unset($this->tlibros[$indice]);
        $this->tlibros = array_values($this->tlibros);
    }

    /**
     * Devuelve la posición del libro con ese id, o null si no existe.
     */
    public function getIndiceById(int $id): ?int
    {
        foreach ($this->tlibros as $indice => $libro) {
            if ($libro->id === $id) {
                return $indice;
            }
        }
        return null;
    }

    /**
     * Recibe índices de etiquetas y devuelve sus nombres.
     */
    public function indice_etiquetas_a_nombres(array $indices): array
    {
        $etiquetas = self::getEtiquetas();
        $nombres = [];

        foreach ($indices as $indice) {
            if (($etiquetas[$indice])) {
                $nombres[] = $etiquetas[$indice];
            }
        }

        return $nombres;
    }
}