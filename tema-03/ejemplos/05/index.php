<?php

/*
 Tipos de array
*/


$colores = ["rojo", "verde", "azul", "amarillo", "naranja"];

//Acceder a un elemento del array
echo $colores[0]; // rojo

// Recorrer un array con un bucle for
for ($i = 0; $i < count($colores); $i++) {
    echo $colores[$i] . "<br>";
}

// Recorrer un array con un bucle foreach
foreach ($colores as $color) {
    echo $color . "<br>";
}

// Agregar un elemento al final del array
$colores[] = "morado";

// Eliminar un elemento del array
unset($colores[2]); // Elimina el elemento en la posición 2 (azul)

// Recorrer array mostrando iindice y valor

foreach ($colores as $indice => $color) {
    echo "Indice: $indice, Color: $color <br>";
}

// Modificar elemento del array
$colores[1] = "verde claro"; // Modifica el elemento en la posición 1
