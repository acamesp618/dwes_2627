<?php

/*
    Actividad: 2.2.4
    Descripción: Comprobaciones con la función empty().
    Alumno: Adrian Campos Espejo
    Fecha: 07/10/2026
*/

echo "<h1>Actividad 2.2.4 - Función empty()</h1>";

// Casos Verdaderos (true - se consideran vacíos)
$varEmpty1 = "";
$varEmpty2 = 0;
$varEmpty3 = null;

echo "<h3>Casos VERDADEROS (devuelven true / 1):</h3>";
echo "1. Cadena vacía \"\": " . var_export(empty($varEmpty1), true) . "<br>";
echo "2. Valor entero 0: " . var_export(empty($varEmpty2), true) . "<br>";
echo "3. Valor null: " . var_export(empty($varEmpty3), true) . "<br>";

// Casos Falsos (false - contienen algún valor no considerado vacío)
$varNoEmpty1 = "PHP";
$varNoEmpty2 = 123;
$varNoEmpty3 = true;

echo "<h3>Casos FALSOS (devuelven false):</h3>";
echo "1. Cadena con texto \"PHP\": " . var_export(empty($varNoEmpty1), true) . "<br>";
echo "2. Número entero 123: " . var_export(empty($varNoEmpty2), true) . "<br>";
echo "3. Valor booleano true: " . var_export(empty($varNoEmpty3), true) . "<br>";