<?php

/**
 * create.php
 * Recibe los datos del formulario de new.php y añade el nuevo ARTÍCULO a la tabla.
 */

// Cargar librerías
require_once 'libs/functions.php';

// Extraer los datos enviados desde el formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo      = htmlspecialchars($_POST['modelo'] ?? '');
$categoria   = htmlspecialchars($_POST['categoria'] ?? '');
$unidades    = (int)($_POST['unidades'] ?? 0);
$precio      = (float)($_POST['precio'] ?? 0.0);

// Obtener el array de artículos existentes
$articulos = get_articulos();

// Generar nuevo ID correlativo (último ID + 1)
$ultimo_articulo = end($articulos);
$nuevo_id = $ultimo_articulo ? $ultimo_articulo['id'] + 1 : 1;

// Crear el array asociativo del nuevo artículo
$nuevo_articulo = [
    'id'          => $nuevo_id,
    'descripcion' => $descripcion,
    'modelo'      => $modelo,
    'categoria'   => $categoria,
    'unidades'    => $unidades,
    'precio'      => $precio
];

// Añadir el nuevo artículo al array principal
$articulos[] = $nuevo_articulo;

// Cargar la vista principal para mostrar la tabla con el nuevo elemento
require_once 'views/index.view.php';