<?php


// Cargamos las librerias
require_once 'libs/functions.php';


// Negociado
$peliculas = get_peliculas();

// Views
include 'views/index.view.php';
