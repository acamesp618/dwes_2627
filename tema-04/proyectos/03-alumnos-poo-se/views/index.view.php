<!doctype html>
<html lang="es">

<head>
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Proyecto 4.3 - CRUD Alumnos - POO SIN Encapsulación</title>
</head>

<body>
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- menú principal -->
        <?php require_once __DIR__ . '/partials/menu.partial.php'; ?>

        <!-- contenido principal -->
        <main class="mb-5 pb-4">
            <div class="content">
                <legend>Tabla de alumnos - POO</legend>

                <!-- Ampliación: Ordenar y Buscar -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="btn-group btn-group-sm" role="group">
                            <span class="btn btn-outline-secondary disabled">Ordenar por:</span>
                            <a href="index.php?orden=apellidos" class="btn btn-outline-secondary">Apellidos</a>
                            <a href="index.php?orden=edad" class="btn btn-outline-secondary">Edad</a>
                            <a href="index.php?orden=curso" class="btn btn-outline-secondary">Curso</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="index.php" method="GET" class="d-flex">
                            <input type="text" name="buscar" class="form-control form-control-sm me-2" placeholder="Buscar por nombre, apellidos o curso..." value="<?= htmlspecialchars($_GET['buscar'] ?? '') ?>">
                            <button type="submit" class="btn btn-outline-primary btn-sm me-1">Buscar</button>
                            <a href="index.php" class="btn btn-outline-secondary btn-sm">Limpiar</a>
                        </form>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">Id</th>
                            <th scope="col">Alumno</th>
                            <th scope="col">Email</th>
                            <th scope="col">Fecha de nacimiento</th>
                            <th scope="col" class="text-end">Edad</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Asignaturas</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $alumno): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $alumno->id ?></th>
                                <td><?= $alumno->apellidos ?>, <?= $alumno->nombre ?></td>
                                <td><?= $alumno->email ?></td>
                                <td><?= date('d/m/Y', strtotime($alumno->f_nacimiento)) ?></td>
                                <td class="text-end"><?= $alumno->getEdad() ?></td>
                                <td><?= $cursos[$alumno->curso] ?></td>
                                <td><?= implode(', ', $tabla_alumnos->indices_asignaturas_a_nombres($alumno->asignaturas)) ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="delete.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="show.php?id=<?= $alumno->id ?>" class="btn btn-sm btn-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7" class="text-end">Total alumnos</td>
                            <td class="text-end"><?= count($alumnos) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <!-- pie de página -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>

    </div>
</body>

</html>