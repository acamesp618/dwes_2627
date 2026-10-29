<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.2. CRUD de articulos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-3">

        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 3.2. CRUD de articulos</span>
        </header>

        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Articulos</a>
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
                                <a class="nav-link active" aria-current="page" href="new.php">Nuevo</a>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                                    Ordenar
                                </button>
                                <div class="menu">
                                    <a class="menu-item" href="order.php?criterio=id">Id</a>
                                    <a class="menu-item" href="order.php?criterio=descripcion">Descripción</a>
                                    <a class="menu-item" href="order.php?criterio=modelo">Modelo</a>
                                    <a class="menu-item" href="order.php?criterio=categoria">Categoria</a>
                                    <a class="menu-item" href="order.php?criterio=unidades">Unidades</a>
                                    <a class="menu-item" href="order.php?criterio=precio">Precio</a>

                                </div>
                            </li>
                        </ul>
                        <form class="hstack gap-2" role="search" action="filter.php" method="GET">
                            <input class="form-control" type="search" name="prompt" placeholder="Buscar" aria-label="Search" />
                            <button class="btn-solid btn-icon theme-secondary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                </dialog>
            </div>
        </nav>

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
                        <?php foreach ($articulos as $indice => $articulo): ?>
                            <tr>
                                <th scope="row" class="text-end"><?= $articulo['id'] ?></th>
                                <td><?= $articulo['descripcion'] ?></td>
                                <td><?= $articulo['modelo'] ?></td>
                                <td><?= $articulo['categoria'] ?></td>
                                <td class="text-end"><?= $articulo['unidades'] ?></td>
                                <td class="text-end"><?= number_format($articulo['precio'], 2, ',', '.') ?> €</td>

                                <td>
                                    <!-- Editar -->
                                    <a href="edit.php?indice=<?= $indice ?>" class="btn btn-outline-primary btn-sm" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <!-- Eliminar -->
                                    <a href="delete.php?indice=<?= $indice ?>" class="btn btn-outline-primary btn-sm" title="Eliminar">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <!-- Mostrar -->
                                    <a href="show.php?indice=<?= $indice ?>" class="btn btn-outline-primary btn-sm" title="Mostrar">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>

        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026 Adrian Campos Espejo - DWES - 2º DAW - Curso 26/27</span>
            </div>
        </footer>

        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>