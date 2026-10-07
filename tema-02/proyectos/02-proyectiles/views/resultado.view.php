<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cálculo Lanzamiento de Proyectiles</title>

  <!-- css bootstrap basico 5.3.8 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <!-- icons bootstrap basico 5.3.8 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
  <!-- capa principal de la aplicacion -->
  <div class="container mt-3">

    <header class="bg-primary text-white p-3 mb-3">
      <i class="bi bi-rocket-takeoff-fill"></i>
      <span class="fs-6">Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</span>
    </header>


    <! -- contenido principal de la aplicacion -- >
      <main>
        <div class="content">
          <!-- Formulario de la calculadora -->
          <form>
            <table class="table table-striped-columns">
              <tbody>
                <tr>
                  <th colspan="2">
                    Valores iniciales
                  </th>
                </tr>

                <tr>
                  <td>
                    Velocidad inicial:
                  </td>
                  <td> <?= $velocidad_inicial ?> m/s</td>
                </tr>

                <tr>
                  <td>
                    Ángulo inclinación:
                  </td>
                  <td> <?= $angulo_lanzamiento ?> º</td>
                </tr>

                <tr>
                  <th colspan="2">
                    Resultados
                  </th>
                </tr>

                <tr>
                  <td>
                    Ángulo radianes:
                  </td>
                  <td> <?= $angulo_radianes ?> radianes</td>
                </tr>

                <tr>
                  <td>
                    Velocidad inicial X:
                  </td>
                  <td> <?= $velocidad_inicial_horizontal ?> m/s</td>
                </tr>

                <tr>
                  <td>
                    Velocidad inicial Y:
                  </td>
                  <td> <?= $velocidad_inicial_vertical ?> m/s</td>
                </tr>

                <tr>
                  <td>
                    Alcance Máximo del Proyectil:
                  </td>
                  <td> <?= $alcance_max ?> m</td>
                </tr>

                <tr>
                  <td>
                    Tiempo de Vuelo del Proyectil:
                  </td>
                  <td> <?= $tiempo_vuelo ?> s</td>
                </tr>

                <tr>
                  <td>
                    Altura Máxima del Proyectil:
                  </td>
                  <td> <?= $altura_max ?> m </td>
                </tr>

              </tbody>

            </table>

            <!-- Botones de acción -->
            <div class="btn-group" role="group">
              <a class="btn btn-warning" href="index.php" role="button">Nuevo cálculo</a>
            </div>

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