<?php

/**
 * create.php
 * 
 * Permite crear un nuevo articulo a partir de los datos ingresados en un formulario.
 
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
require_once 'libs/funciones_articulos.php';

// Models

// Negociado

// Extraer los datos del formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categoria = htmlspecialchars($_POST['categoria'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

// Proceso de validacion de los datos del formulario

// Obtener el array de libros existentes
$articulos = get_articulos();

// Obtener id del nuevo libro insertado
$nuevo_articulo_id = get_indice_articulo_por_id($articulos, $id);

// Crear array asociativo con los datos del libro
$nuevo_articulo = [
    'id' => $nuevo_articulo_id,
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categoria' => $categoria,
    'unidades' => $unidades,
    'precio' => $precio
];

// Agregar el nuevo libro al array de libros
$articulos[] = $nuevo_articulo;

// Views
include 'views/index.view.php';
