<?php

/*
    Archivo: Talumnos.php
    Descripción: Clase Talumnos, se trata de un array de  objetos de la clase Alumnos.
    Caracteristicas: POO sin encapusulamiento.
    Atributos:
        - talumnos []
    Métodos: 
        - constructor
        - getCurso()
        - getAsignaturas()

*/

// Tabla que va a contener una array de objetos de la clase Alumno
class Talumnos
{

    public ?array $talumnos;

    public function __construct()
    {
        $this->talumnos = [];
    }


    /*
        Método getMarcas()
        Descripción: Devuelve un array con todas las marcas de artículos disponibles
        Con este array tengo que generar el select  dinámico del campo marca.
        Cuando  estemos trabajando con base  de datos: SELECT id, marca FROM marcas order by id.
    */
    static public function getCurso(): ?array
    {
        $curso = [
            '1SMR',
            '2SMR',
            '1DAW',
            '2DAW',
            '1AD',
            '2AD'
        ];

        return $curso;
    }

    /*  
    
        Método getCategorias()
        Descripción: Devuelve un array con todos los tipos de categorias disponibles
        Con este array tengo que generar una lista de checbox dinámico del campo categoria.
        Cuando  estemos trabajando con base  de datos: SELECT id, categoria FROM categorias order by id.
    */
    public static function getAsignaturas(): ?array
    {
        $asignaturas = [
            'DWES',
            'DWEC',
            'DAWEB',
            'DWCL',
            'HLC',
            'EINEM',
            'Base de Datos',
            'Diseño Interfaces'
        ];

        return $asignaturas;
    }
    /*
        Método addAlumnos()
        Descripción: Devuelve un array con todos los alumnos disponibles
    */
    public function addalumnos()
    {

        // Creaer un objeto de la clase alumno
        $alumno = new Alumno(
            1,
            'Jose Luis',
            'Lopez Hernandez',
            'j_lopher@g.educaand.es',
            1998/12/10,
            0,
            [1, 2, 3]
        );

        $this->talumnos[] = $alumno;

        // Añadir más artículos al array
        $alumno = new Alumno(
            2,
            'Tablet Samsung Galaxy Tab S7',
            'Tab S7',
            0,
            [0, 1, 3],
            10,
            15.99
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            3,
            'Laptop LG Gram 17',
            'Gram 17',
            1,
            [0, 2, 4],
            3,
            25.99
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            4,
            'Smartwatch Sony Smartwatch 3',
            'Smartwatch 3',
            2,
            [0, 3, 5],
            7,
            9.99
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            5,
            'Television Apple TV 4K',
            'TV 4K',
            3,
            [0, 4, 6],
            2,
            19.99
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            6,
            'Audio Xiaomi Mi Soundbar',
            'Mi Soundbar',
            4,
            [0, 5, 7],
            8,
            14.99
        );

        $this->talumnos[] = $alumno;
    }
}