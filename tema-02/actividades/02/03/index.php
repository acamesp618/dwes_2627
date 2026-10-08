<?php

/*
    Actividad: 2.2.3
    Descripción: Comprobaciones con la función isset().
    Alumno: Adrian Campos Espejo
    Fecha: 07/10/2026
*/

echo "<h1>Actividad 2.2.3 - Función isset()</h1>";

// Casos Verdaderos (true - definida y distinta de null)
$varSet1 = "Hola mundo";
$varSet2 = 0;
$varSet3 = false;

echo "<h3>Casos VERDADEROS (devuelven true / 1):</h3>";
echo "1. Variable con texto: " . var_export(isset($varSet1), true) . "<br>";
echo "2. Variable con valor 0: " . var_export(isset($varSet2), true) . "<br>";
echo "3. Variable con valor false: " . var_export(isset($varSet3), true) . "<br>";

// Casos Falsos (false - no definida o es null)
$varNoSet1 = null;
$varNoSet2; // Declarada sin valor
// $varNoSet3 no existe

echo "<h3>Casos FALSOS (devuelven false):</h3>";
echo "1. Variable igual a null: " . var_export(isset($varNoSet1), true) . "<br>";
echo "2. Variable sin inicializar: " . var_export(isset($varNoSet2), true) . "<br>";
echo "3. Variable no definida: " . var_export(isset($varNoSet3), true) . "<br>";