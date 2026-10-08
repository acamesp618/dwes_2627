<?php

/*
    Actividad: 2.2.1
    Descripción: Conversiones de datos en expresiones matemáticas.
    Alumno: Adrian Campos Espejo
    Fecha: 07/10/2026
*/

echo "<h1>Actividad 2.2.1 - Conversiones de datos en expresiones</h1>";

// 1. Multiplica valor entero con una cadena que contiene un número inicial
$entero1 = 5;
$cadenaNum1 = "10 noticias";
$res1 = $entero1 * $cadenaNum1;
echo "<p><strong>1. Multiplicar entero y cadena con número:</strong> ";
echo "Resultado = $res1 | Tipo = " . gettype($res1) . "</p>";

// 2. Sumar valor entero con cadena con número inicial
$entero2 = 8;
$cadenaNum2 = "20 euros";
$res2 = $entero2 + $cadenaNum2;
echo "<p><strong>2. Sumar entero y cadena con número:</strong> ";
echo "Resultado = $res2 | Tipo = " . gettype($res2) . "</p>";

// 3. Sumar valor entero con valor float
$entero3 = 10;
$float3 = 4.5;
$res3 = $entero3 + $float3;
echo "<p><strong>3. Sumar entero y float:</strong> ";
echo "Resultado = $res3 | Tipo = " . gettype($res3) . "</p>";

// 4. Concatenar valor entero con cadena
$entero4 = 100;
$cadena4 = " artículos";
$res4 = $entero4 . $cadena4;
echo "<p><strong>4. Concatenar entero y cadena:</strong> ";
echo "Resultado = \"$res4\" | Tipo = " . gettype($res4) . "</p>";

// 5. Sumar valor entero con valor booleano
$entero5 = 15;
$bool5 = true; // Equivale a 1
$res5 = $entero5 + $bool5;
echo "<p><strong>5. Sumar entero y booleano (true):</strong> ";
echo "Resultado = $res5 | Tipo = " . gettype($res5) . "</p>";