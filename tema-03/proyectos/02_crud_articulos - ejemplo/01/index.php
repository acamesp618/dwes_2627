<?php

/**
 * index.php
 * 
 * Pagina principal del proyecto CRUD de articulos.
 * Muestra un listado de articulos y permite agregar, editar y eliminar articulos.
 * 
 * @package CRUD Articulos
 * @author [Tu Nombre]
 * @version 1.0
 * 
 * Tabla articulos:
 * - id 
 * - descripcion 
 * - modelo 
 * - categorias 
 * - unidades 
 * - precio 
 * 
 */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
$articulos = get_articulos();

// Views
require_once 'views/index.view.php';
