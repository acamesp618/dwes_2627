<?php

// 1. Comprobar que llega por POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: new.php');
    exit;
}

// 2. Cargar clases
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';

// Recoger datos del formulario
$descripcion = trim($_POST['descripcion'] ?? '');
$modelo = trim($_POST['modelo'] ?? '');
$marca = $_POST['marca'] ?? '';
$categoriasSeleccionadas = $_POST['categorias'] ?? [];
$unidades = $_POST['unidades'] ?? '';
$precio = $_POST['precio'] ?? '';

$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();
$errores = [];

// Validación
if ($descripcion === '') {
    $errores[] = 'La descripción es obligatoria.';
}
if ($modelo === '') {
    $errores[] = 'El modelo es obligatorio.';
}
if ($marca === '' || !isset($marcas[(int)$marca])) {
    $errores[] = 'Debe seleccionar una marca.';
}
if (empty($categoriasSeleccionadas)) {
    $errores[] = 'Debe seleccionar al menos una categoría.';
}
if ($unidades === '' || filter_var($unidades, FILTER_VALIDATE_INT) === false || (int)$unidades < 0) {
    $errores[] = 'Las unidades deben ser un número entero mayor o igual que 0.';
}
if ($precio === '' || !is_numeric($precio) || (float)$precio < 0) {
    $errores[] = 'El precio debe ser un número mayor o igual que 0.';
}

// Si hay errores, volver a new.view.php
if (!empty($errores)) {
    include __DIR__ . '/views/new.view.php';
    exit;
}

// 3. Crear la colección base y añadir el nuevo artículo
$tabla_articulos = new Tarticulos();
$tabla_articulos->addArticulos();

$articulosExistentes = $tabla_articulos->getTarticulos();
$nuevoId = count($articulosExistentes) + 1;

$nuevoArticulo = new Articulo(
    $nuevoId,
    $descripcion,
    $modelo,
    (int)$marca,
    array_map('intval', $categoriasSeleccionadas),
    (int)$unidades,
    (float)$precio
);

$tabla_articulos->addArticulo($nuevoArticulo);

// 4. Obtener datos actualizados y cargar index.view.php
$articulos = $tabla_articulos->getTarticulos();

include __DIR__ . '/views/index.view.php';