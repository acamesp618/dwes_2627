<!doctype html>
<html lang="es">

<head>
    <!-- Head layout -->
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Examen 4.1 - CRUD Libros - POO Sin Encapsulamiento</title>
</head>

<body>
    <div class="container mt-3">

        <!-- header y menu layout -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>
        <?php require_once __DIR__ . '/partials/menu.partial.php'; ?>

        <main>
            <div class="content">
                <legend>Tabla de libros - POO</legend>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">Id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Publicación</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Etiquetas</th>
                            <th scope="col" class="text-end">Páginas</th>
                            <th scope="col" class="text-end">Stock</th>
                            <th scope="col" class="text-end">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Detalles libros -->
                        <?php foreach ($libros as $indice => $libro): ?>
                            <tr>
                                <td class="text-end"><?= $libro->id ?></td>
                                <td><?= htmlspecialchars($libro->titulo) ?></td>
                                <td><?= htmlspecialchars($libro->fecha_publicacion) ?></td>
                                <td><?= htmlspecialchars($libro->autor) ?></td>
                                <td><?= $categorias[$libro->categoria] ?? 'Sin categoría' ?></td>
                                <td><?= implode(', ', $tabla_libros->indice_etiquetas_a_nombres($libro->etiquetas)) ?></td>
                                <td class="text-end"><?= $libro->numero_paginas ?></td>
                                <td class="text-end"><?= $libro->stock ?></td>
                                <td class="text-end"><?= number_format($libro->precio, 2, ',', '.') ?> €</td>
                                <td>
                                    <a href="edit.php?indice=<?= $indice ?>" class="btn btn-sm btn-primary" title="Editar">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="delete.php?indice=<?= $indice ?>" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este libro?')">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="show.php?indice=<?= $indice ?>" class="btn btn-sm btn-info" title="Mostrar">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Total</strong></td>
                            <!-- mostrar el total de libros en la tabla -->
                            <td colspan="9"><strong><?= count($libros) ?> libros</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <!-- footer y js bootstrap layout -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>
        <?php require_once __DIR__ . '/layouts/js_bootstrap.layout.php'; ?>

    </div>
</body>

</html>