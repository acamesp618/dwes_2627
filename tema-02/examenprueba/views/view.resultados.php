<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultados del MRUA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-3">
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Resultados del MRUA</span>
        </header>

        <main>
            <div class="content">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr>
                            <th>Magnitud</th>
                            <th>Valor</th>
                            <th>Unidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Velocidad final</td>
                            <td><?= number_format($velocidadFinal, 2, ',', '.') ?></td>
                            <td>m/s</td>
                        </tr>
                        <tr>
                            <td>Espacio recorrido</td>
                            <td><?= number_format($espacio, 2, ',', '.') ?></td>
                            <td>m</td>
                        </tr>
                        <tr>
                            <td>Fuerza neta</td>
                            <td><?= number_format($fuerza, 2, ',', '.') ?></td>
                            <td>N</td>
                        </tr>
                        <tr>
                            <td>Energía cinética final</td>
                            <td><?= number_format($energia, 2, ',', '.') ?></td>
                            <td>J</td>
                        </tr>
                    </tbody>
                </table>

                <a href="index.php" class="btn btn-primary">Volver al formulario</a>
            </div>
        </main>

        <footer class="mt-4 py-3 bg-light">
            <span class="text-muted">&copy; 2026 - DWES - 2º DAW - Curso 26/27</span>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>