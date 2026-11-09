<?php

require_once 'Alumno.php';

// 1. Crear un objeto Alumno con todos sus atributos inicializados a null
$alumnoVacio = new Alumno();

// 2. Crear un objeto Alumno asignando valores mediante el constructor
$alumnoParametrizado = new Alumno(
    1,
    'Adrián',
    'Campos Espejo',
    'Ubrique',
    'acamesp618@g.educaand.es',
    '652784112',
    '2º DAW'
);

// 3. Uso de Setters en el objeto vacío para asignarle datos
$alumnoVacio->setId(2);
$alumnoVacio->setNombre('María');
$alumnoVacio->setApellidos('García López');
$alumnoVacio->setPoblacion('Jerez de la Frontera');
$alumnoVacio->setEmail('maria@example.com');
$alumnoVacio->setTelefono('611223344');
$alumnoVacio->setCurso('1º DAW');

// 4. Modificar una propiedad del objeto parametrizado usando Setter
$alumnoParametrizado->setPoblacion('Málaga');

// 5. Mostrar los datos de ambos objetos utilizando únicamente sus Getters
echo "========== ALUMNO 1 (Modificado mediante Setters) ==========\n";
echo "ID: " . $alumnoVacio->getId() . "\n";
echo "Nombre completo: " . $alumnoVacio->getNombre() . " " . $alumnoVacio->getApellidos() . "\n";
echo "Población: " . $alumnoVacio->getPoblacion() . "\n";
echo "Email: " . $alumnoVacio->getEmail() . "\n";
echo "Teléfono: " . $alumnoVacio->getTelefono() . "\n";
echo "Curso: " . $alumnoVacio->getCurso() . "\n\n";

echo "========== ALUMNO 2 (Creado con parámetros) ==========\n";
echo "ID: " . $alumnoParametrizado->getId() . "\n";
echo "Nombre completo: " . $alumnoParametrizado->getNombre() . " " . $alumnoParametrizado->getApellidos() . "\n";
echo "Población (actualizada): " . $alumnoParametrizado->getPoblacion() . "\n";
echo "Email: " . $alumnoParametrizado->getEmail() . "\n";
echo "Teléfono: " . $alumnoParametrizado->getTelefono() . "\n";
echo "Curso: " . $alumnoParametrizado->getCurso() . "\n";