<!doctype html>
<html lang="es">

<head>
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Proyecto 4.3 - CRUD Alumnos - Editar Alumno</title>
</head>

<body>
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- contenido principal -->
        <main class="mb-5 pb-4">
            <div class="content">
                <legend>Formulario Edición Alumno</legend>

                <form action="update.php?id=<?= $id ?>" method="post">
                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $alumno->nombre ?>" required>
                    </div>

                    <!-- Apellidos -->
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $alumno->apellidos ?>" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $alumno->email ?>" required>
                    </div>

                    <!-- Fecha de nacimiento -->
                    <div class="mb-3">
                        <label for="f_nacimiento" class="form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" value="<?= $alumno->f_nacimiento ?>" required>
                    </div>

                    <!-- Curso -->
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso:</label>
                        <select name="curso" id="curso" class="form-control combobox-toggle" type="button" required>
                            <?php foreach ($cursos as $indice => $curso): ?>
                                <option value="<?= $indice ?>" <?= ($alumno->curso == $indice) ? 'selected' : null ?>>
                                    <?= $curso ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Asignaturas -->
                    <div class="mb-3">
                        <label class="form-label">Asignaturas:</label>
                        <?php foreach ($asignaturas as $indice => $asignatura): ?>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"
                                       id="asignatura_<?= $indice ?>"
                                       name="asignaturas[]"
                                       value="<?= $indice ?>"
                                       <?= in_array($indice, $alumno->asignaturas) ? 'checked' : null ?>>
                                <label class="form-check-label" for="asignatura_<?= $indice ?>"><?= $asignatura ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <br>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Actualizar Alumno</button>
                    </div>
                </form>
            </div>
        </main>

        <!-- pie de página -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>

    </div>
</body>

</html>