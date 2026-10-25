<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.2. CRUD de articulos</title>

    <!-- css bootstrap basico 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


    <!-- icons bootstrap basico 5.3.8 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">

</head>

<body>
    <!-- capa principal de la aplicacion -->
    <div class="container mt-3">

        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 3.2. CRUD de articulos</span>
        </header>

        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Articulos</a>
                <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                    <div class="drawer-header">
                        <h5 class="drawer-title" id="navbarDrawerLabel">Articulos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                    </div>
                    <div class="drawer-body mb-2 md:mb-0">
                        <ul class="nav navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="form_nuevo.php">Nuevo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ordenar</a>
                            </li>
                            
                        </ul>
                        <form class="hstack gap-2" role="search">
                            <input class="form-control" type="search" placeholder="Buscar" aria-label="Search" />
                            <button class="btn-solid btn-icon theme-secondary" type="submit">
                                <svg class="bi" width="16" height="16" >
                                    <use href="#search" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </dialog>
            </div>
        </nav>

        <! -- contenido principal de la aplicacion -- >
            <main>
                <div class="content">
                    <h1> Lista de artículos</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Unidades</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($articulos as $articulo): ?>
                                <tr>
                                    <th scope="row" class="text-end"><?= $articulo['id'] ?></th>
                                    <td><?= $articulo['descripcion'] ?></td>
                                    <td><?= $articulo['modelo'] ?></td>
                                    <td><?= $articulo['categoria'] ?></td>
                                    <td class="text-end"><?= $articulo['unidades'] ?></td>
                                    <td class="text-end"><?= number_format($articulo['precio'], 2, ',', '.') ?> €</td>

                                    <!-- botones de acción -->
                                    <td>
                                        <!-- Editar -->
                                        <a href="edit.php?indice=<?= $indice ?>" class="btn btn-outline-primary btn-sm" title="Editar">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <!-- eliminar -->
                                        <a href="delete.php" class="btn btn-outline-primary btn-sm" title="Eliminar">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <!-- mostrar -->
                                        <a href="show.php" class="btn btn-outline-primary btn-sm" title="Mostrar">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>

                    </table>

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

            <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    </div>
</body>

</html>