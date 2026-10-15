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
// Crear lista de perfiles
$perfiles = ['admin', 'edit', 'user'];

// Vista
include 'views/view.index.php';
