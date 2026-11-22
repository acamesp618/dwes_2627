<!doctype html>
<html lang="es">

<head>
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Proyecto 4.3 - CRUD Alumnos - Detalles del Alumno</title>
</head>

<body>
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- contenido principal -->
        <main class="mb-5 pb-4">
            <div class="content">
                <legend>Detalles del Alumno</legend>

                <dl class="row">
                    <dt class="col-sm-3">Id</dt>
                    <dd class="col-sm-9"><?= $alumno->id ?></dd>

                    <dt class="col-sm-3">Nombre</dt>
                    <dd class="col-sm-9"><?= $alumno->nombre ?></dd>

                    <dt class="col-sm-3">Apellidos</dt>
                    <dd class="col-sm-9"><?= $alumno->apellidos ?></dd>

                    <dt class="col-sm-3">Email</dt>
                    <dd class="col-sm-9"><?= $alumno->email ?></dd>

                    <dt class="col-sm-3">Fecha de nacimiento</dt>
                    <dd class="col-sm-9"><?= date('d/m/Y', strtotime($alumno->f_nacimiento)) ?></dd>

                    <dt class="col-sm-3">Edad</dt>
                    <dd class="col-sm-9"><?= $alumno->getEdad() ?> años</dd>

                    <dt class="col-sm-3">Curso</dt>
                    <dd class="col-sm-9"><?= $cursos[$alumno->curso] ?></dd>

                    <dt class="col-sm-3">Asignaturas</dt>
                    <dd class="col-sm-9"><?= implode(', ', $tabla_alumnos->indices_asignaturas_a_nombres($alumno->asignaturas)) ?></dd>
                </dl>

                <a class="btn btn-primary" href="index.php">Volver</a>
            </div>
        </main>

        <!-- pie de página -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>

    </div>
</body>

</html>