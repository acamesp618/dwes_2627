<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen prueba</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Cálculo del movimiento rectilíneo uniformemente acelerado (MRUA)</span>
        </header>
    
        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <h4>Introduce los datos del movimiento</h4>

                <form action="calcular.php" method="post">
                     <div class="mb-3">
                        <label class="form-label">Velocidad inicial (m/s)</label>
                        <input type="text" name="velocidad" class="form-control" placeholder="0,00" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Aceleración (m/s²)</label>
                        <input type="text" name="aceleracion" class="form-control" placeholder="0,00" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tiempo (s)</label>
                        <input type="text" name="tiempo" class="form-control" placeholder="0,00" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Masa (kg)</label>
                        <input type="text" name="masa" class="form-control" placeholder="0,00" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Calcular</button>

                </form>
            </div>

        </main>
        
        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Adrian Campos Espejo - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    </div>
  </body>
</html>