<?php


/*
    Actividad 3.2.
    Descripcion: Formulario de registro con acceso segun perfil de usuario.

    Formulario de registro:
    - Nombre de usuario
    - Email
    - Contraseña
    - Perfil de usuario (admin, edit, user)

    Tipo de perfiles:
    - admin: añadir. eliminar, actualizar y consultar
    - edit: añadir, actualizar y consultar
    - user: consultar



*/

// Models

// Negociado
// Obtener los detalles del formulario de registro
$usuario = $_POST['usuario'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$perfil = $_POST['perfil'] ?? '';

// Validación de los datos del formulario


//

// Vista
include 'views/view.acceso.php';
