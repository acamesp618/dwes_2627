<?php


/**
 * Clase Alumno
 *
 * 
 * @atributos:
 *  - $id
 *  - $nombre.
 *  - $apellidos
 *  - $email
 *  - $f_nacimiento
 *  - $curso - Lista desplegable.
 *  - $asignaturas  - Lista checkbox 
 * 
 * @métodos:
 *  - constructor: parámetros opcionales
 */

Class Alumno {

    public ?int $id;
    public ?string  $nombre;
    public ?string $apellidos;
    public ?string $email;
    public ?int $f_nacimiento;
    public ?string $curso;
    public ?array $asignaturas;


    public function getEdad(): ?int
    {
        $anio = $this->f_nacimiento['anio'] ?? null;

        if ($anio === null) {
            return null;
        }

        return (int) date('Y') - (int) $anio;
    }
}