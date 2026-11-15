<?php

/**
 * new.php
 *
 * Página principal del proyecto CRUD de artículos. Muestra la tabla de artículos, cada artículo es un ob
 *
 * @package    CRUD Artículos
 * @author     Tu Nombre
 * @version    1.0
 *
 * Tabla artículos:
 *  - id
 *  - descripcion
 *  - modelo
 *  - marca
 *  - categorias (array)
 *  - unidades
 *  - precio
 */

// Cargar clases
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';

// Models - no lo necesitamos NO BASE DE DATOS


// 1. Obtener el array de marcas - es  metodo estático, no necesitamos crear un objeto de la clase Tarticulos
$marcas = Tarticulos::getMarcas();

// 2. Obtener el array de categorías - es  metodo estático, no necesitamos crear un objeto de la clase Tarticulos
$categorias = Tarticulos::getCategorias();

// Views
include __DIR__ . '/views/new.view.php';
