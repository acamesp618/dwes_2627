<?php

/*
    Archivo: TablaAlumnos.php
    Descripción: Clase TablaAlumnos, gestiona un array de objetos de la clase Alumno.
    Características: POO sin encapsulamiento.
*/

class TablaAlumnos
{
    public array $talumnos;

    public function __construct()
    {
        $this->talumnos = [];
    }

    /**
     * Devuelve el array de cursos disponibles.
     */
    public static function getCursos(): array
    {
        return [
            0 => '1SMR',
            1 => '2SMR',
            2 => '1DAW',
            3 => '2DAW',
            4 => '1AD',
            5 => '2AD'
        ];
    }

    /**
     * Devuelve el array de asignaturas disponibles.
     */
    public static function getAsignaturas(): array
    {
        return [
            0 => 'DWES',
            1 => 'DWEC',
            2 => 'Despliegue de Aplicaciones',
            3 => 'HLC',
            4 => 'EINEM',
            5 => 'Diseño de Interfaces'
        ];
    }

    /**
     * Método estático. Devuelve un array con al menos cuatro objetos Alumno de prueba.
     */
    public static function addAlumnos(): array
    {
        return [
            new Alumno(1, 'Juan', 'Pérez Gómez', 'juan.perez@email.com', '2003-05-14', 3, [0, 1, 2, 3]),
            new Alumno(2, 'María', 'López Ruiz', 'maria.lopez@email.com', '2004-09-22', 2, [0, 4, 5]),
            new Alumno(3, 'Carlos', 'Sánchez Díaz', 'carlos.sanchez@email.com', '2002-11-03', 3, [1, 2, 5]),
            new Alumno(4, 'Laura', 'Martínez Soto', 'laura.martinez@email.com', '2005-01-30', 0, [3, 4])
        ];
    }

    /**
     * Añade un alumno al final del array.
     */
    public function create(Alumno $alumno): void
    {
        $this->talumnos[] = $alumno;
    }

    /**
     * Devuelve el objeto Alumno situado en esa posición, o null si no existe.
     */
    public function read(int $indice): ?Alumno
    {
        return $this->talumnos[$indice] ?? null;
    }

    /**
     * Sustituye el alumno de esa posición por el objeto recibido.
     */
    public function update(int $indice, Alumno $alumno): void
    {
        $this->talumnos[$indice] = $alumno;
    }

    /**
     * Elimina el alumno de esa posición y reindexa el array con array_values().
     */
    public function delete(int $indice): void
    {
        unset($this->talumnos[$indice]);
        $this->talumnos = array_values($this->talumnos);
    }

    /**
     * Devuelve la posición del alumno con ese id, o null si no existe.
     */
    public function getIndiceById(int $id): ?int
    {
        foreach ($this->talumnos as $indice => $alumno) {
            if ($alumno->id === $id) {
                return $indice;
            }
        }
        return null;
    }

    /**
     * Recibe índices de asignaturas y devuelve sus nombres.
     */
    public function indices_asignaturas_a_nombres(array $indices): array
    {
        $asignaturas = self::getAsignaturas();
        $nombres = [];

        foreach ($indices as $indice) {
            if (isset($asignaturas[$indice])) {
                $nombres[] = $asignaturas[$indice];
            }
        }

        return $nombres;
    }
}