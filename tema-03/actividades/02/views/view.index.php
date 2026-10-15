<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 3.2</title>

    <!-- css bootstrap basico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap basico 5.3.8 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicacion -->
    <div class="container mt-3">

        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Actividad 3.2. Formulario de registro</span>
        </header>

        <! -- contenido principal de la aplicacion -->
            <main>
                <div class="content">

                    <!-- Formulario de registro con acceso según perfil de usuario. -->

                    <h2>Formulario de registro</h2>
                    <form action="acceso.php" method="post">
                        <!-- Campo nombre de usuario -->
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="exampleInputName" name="usuario" aria-describedby="nameHelp" placeholder="Nombre de usuario">
                        </div>

                        <!-- Campos email -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <div id="emailHelp" class="form-text">We’ll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                        </div>

                        <!-- Campo perfil de usuario -->
                        <div class="mb-3">
                            <label for="exampleSelectProfile" class="form-label">Perfil de usuario</label>
                            <select class="form-control" id="exampleSelectProfile" name="perfil">
                                <option selected disabled>Seleccione un perfil</option>
                                <?php foreach ($perfiles as $perfil): ?>
                                    <option value="<?= $perfil ?>"><?= ucfirst($perfil) ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <button type="submit" class="btn-solid theme-primary">Submit</button>
                    </form>

                </div>
            </main>


            <!-- Pie de página -->
            <footer class="footer mt-auto py-3 fixed-bottom bg-light">
                <div class="container">
                    <span class="text-muted">&copy; 2026
                        Adrian Campos Espejo - DWES - 2º DAW - Curso 26/27
                    </span>
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


    </div>
</body>

</html>