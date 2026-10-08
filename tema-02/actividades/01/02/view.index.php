<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 2.1.2</title>

    <!-- CSS Bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Icons Bootstrap básico 5.3.8 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-3 mb-5 pb-5">

        <header class="bg-primary text-white p-3 mb-3 rounded">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Actividad 2.1.2</span>
        </header>

        <main>
            <div class="content">
                <h1><?php echo $titulo; ?></h1>
                
                <!-- Imagen añadida con clases de Bootstrap para ajustar tamaño y bordes -->
                <div class="my-3 text-center">
                    <img src="<?php echo $imagen; ?>" alt="Imagen noticia" class="img-fluid rounded shadow-sm" style="max-height: 400px;">
                </div>

                <p><?php echo $parrafo; ?></p>
                <a href="<?php echo $enlace; ?>" target="_blank" class="btn btn-outline-primary btn-sm">
                    <i></i> Ir a la noticia
                </a>
            </div>
        </main>

        <footer class="footer mt-auto py-3 fixed-bottom bg-light border-top">
            <div class="container">
                <span class="text-muted">&copy; 2026 Adrian Campos Espejo - DWES - 2º DAW - Curso 26/27</span>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </div>
</body>

</html>