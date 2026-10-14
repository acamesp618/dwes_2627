<?php

function convertirNumero($numero){
    $numero = str_replace('.', '', $numero);
    $numero = str_replace(',', '.', $numero);
    return (float) $numero;
}


$velocidad = convertirNumero($_POST['velocidad']);
$aceleracion = convertirNumero($_POST['aceleracion']);
$tiempo = convertirNumero($_POST['tiempo']);
$masa = convertirNumero($_POST['masa']);

$velocidadFinal = $velocidad + $aceleracion * $tiempo;
$espacio = $velocidad * $tiempo + 0.5 * $aceleracion * pow($tiempo, 2);
$fuerza = $masa * $aceleracion;
$energia = 0.5 * $masa * pow($velocidadFinal, 2);

include 'views/view.resultados.php';

?>