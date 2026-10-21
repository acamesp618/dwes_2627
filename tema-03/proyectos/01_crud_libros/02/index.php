<?php

/**
 * index.php
 * 
 * Pagina principal del proyecto CRUD de libros.
 * Muestra un listado de libros y permite agregar, editar y eliminar libros.
 * 
 * @package CRUD Libros
 * @author [Tu Nombre]
 * @version 1.0
 * 
 * Tabla libros:
 * - id (INT, PRIMARY KEY, AUTO_INCREMENT)
 * - titulo (VARCHAR(255))
 * - autor (VARCHAR(255))
 * - editorial (VARCHAR(255))
 * - generos (VARCHAR(255))
 * - precio (DECIMAL(10,2))
 * 
 */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
$libros = getLibros();

// Views
include 'views/index.view.php';
