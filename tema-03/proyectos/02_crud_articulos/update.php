<?php

/**
 * edit.php
 *
 * permite editar un articulos existente en la tabla de articulos
 *
 * @package    CRUD articulo
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla articulos:
 * - id (INT, PRIMARY KEY, AUTO_INCREMENT)
 * - descripcion
 * - modelo
 * - categoria
 * - unidades
 * - precio (DECIMAL(10,2))

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice del articulo a editar desde la URL
// edit.php?indice=0 - edito el  primer articulo
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Extraer los datos enviados por POST desde el formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo      = htmlspecialchars($_POST['modelo'] ?? '');
$categoria   = htmlspecialchars($_POST['categoria'] ?? '');
$unidades    = (int)($_POST['unidades'] ?? 0);
$precio      = (float)($_POST['precio'] ?? 0.0);

// Cargar el array de artículos
$articulos = get_articulos();

// Conservar el ID original del artículo
$id_original = $articulos[$indice]['id'];

// Actualizar los campos del artículo en la posición especificada
$articulos[$indice] = [
    'id'          => $id_original,
    'descripcion' => $descripcion,
    'modelo'      => $modelo,
    'categoria'   => $categoria,
    'unidades'    => $unidades,
    'precio'      => $precio
];

// Cargar la vista del listado principal con el artículo modificado
require_once 'views/index.view.php';