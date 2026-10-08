<?php

/*
    Actividad: 2.2.2
    Descripción: Comprobaciones con la función is_null().
    Alumno: Adrian Campos Espejo
    Fecha: 07/10/2026
*/

echo "<h1>Actividad 2.2.2 - Función is_null()</h1>";

// Casos Verdaderos (true)
$varNull1 = null;
$varNull2; // Variable declarada pero sin asignar valor
unset($varNull3); // Variable destruida o no existente

echo "<h3>Casos VERDADEROS (devuelven true / 1):</h3>";
echo "1. Variable asignada a null: " . var_export(is_null($varNull1), true) . "<br>";
echo "2. Variable sin inicializar: " . var_export(@is_null($varNull2), true) . "<br>";
echo "3. Variable destruida con unset(): " . var_export(@is_null($varNull3), true) . "<br>";

// Casos Falsos (false)
$varNoNull1 = 0;
$varNoNull2 = "";
$varNoNull3 = false;

echo "<h3>Casos FALSOS (devuelven false):</h3>";
echo "1. Variable con valor 0: " . var_export(is_null($varNoNull1), true) . "<br>";
echo "2. Variable con cadena vacía \"\": " . var_export(is_null($varNoNull2), true) . "<br>";
echo "3. Variable con valor false: " . var_export(is_null($varNoNull3), true) . "<br>";