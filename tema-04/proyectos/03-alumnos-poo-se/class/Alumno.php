<?php

/*
    fichero: Alumno.php
    @autor: Adrián Campos Espejo
    @fecha: 2026-11-22
    @proyecto: proyecto_43
*/

/**
 * Clase Alumno
 *
 * @description Clase que representa un alumno mediante POO sin encapsulamiento.
 *
 * @atributos:
 *  - $id: Identificador único del alumno.
 *  - $nombre: Nombre del alumno.
 *  - $apellidos: Apellidos del alumno.
 *  - $email: Correo electrónico.
 *  - $f_nacimiento: Fecha de nacimiento en formato AAAA-MM-DD.
 *  - $curso: Índice del curso en el array de cursos.
 *  - $asignaturas: Array de índices de las asignaturas matriculadas.
 *
 * @métodos:
 *  - __construct(): parámetros opcionales.
 *  - getEdad(): calcula la edad actual en años cumplidos.
 */
class Alumno
{
    public ?int $id;
    public ?string $nombre;
    public ?string $apellidos;
    public ?string $email;
    public ?string $f_nacimiento;
    public ?int $curso;
    public ?array $asignaturas;

    public function __construct(
        ?int $id = null,
        ?string $nombre = null,
        ?string $apellidos = null,
        ?string $email = null,
        ?string $f_nacimiento = null,
        ?int $curso = null,
        ?array $asignaturas = []
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->curso = $curso;
        $this->asignaturas = $asignaturas ?? [];
    }

    public function getEdad(): int
    {
        $nacimiento = new DateTime($this->f_nacimiento);
        $hoy = new DateTime();
        return $nacimiento->diff($hoy)->y;
    }
}