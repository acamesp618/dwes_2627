<?php

/*
 * articulos.php
 * 
 * Pagina principal del proyecto CRUD de articulos.
 * Muestra un listado de articulos y permite añadir, modificar, eliminar y buscar articulos.
 * 
 * @package CRUD articulos
 * @author [Tu Nombre]
 * @version 1.0
 * 
 * Tabla articulos:
 * - id (INT, PRIMARY KEY, AUTO_INCREMENT)
 * - descripcion
 * - modelo
 * - categoria
 * - unidades
 * - precio (DECIMAL(10,2))
 * 
 */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
$articulos = get_articulos();

// Views
require_once 'views/index.view.php';

