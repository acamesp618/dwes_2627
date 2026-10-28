<?php

/**
 * new.php
 * Mostrará un formulario en blanco que permita introducir los detalles del nuevo ARTÍCULO.
 */

// Cargar librerías
require_once 'libs/functions.php';

// Negociado (obtener categorías para el select)
$categorias = generar_tabla_categorias();

// Cargar la vista del formulario
require_once 'views/new.view.php';