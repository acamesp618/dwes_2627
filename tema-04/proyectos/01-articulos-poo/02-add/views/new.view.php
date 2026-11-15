<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto 4.1. - CRUD de articulos con POO y encapsulamiento</title>

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
      <span class="fs-6">Proyecto 4.1. - CRUD de articulos con POO y encapsulamiento</span>
    </header>

    <! -- contenido principal de la aplicacion -->
      <main>
        <div class="content">
          <legend>Formulario Nuevo Libro</legend>

          <form action="create.php" method="post">
            <!-- Descripción -->
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción:</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion"
                value="<?= htmlspecialchars($descripcion ?? '') ?>" required>
            </div>

            <!-- Modelo -->
            <div class="mb-3">
              <label for="modelo" class="form-label">Modelo:</label>
              <input type="text" class="form-control" id="modelo" name="modelo"
                value="<?= htmlspecialchars($modelo ?? '') ?>" required>
            </div>

            <!-- Marca (Select dinámico) -->
            <div class="mb-3">
              <label for="marca" class="form-label">Marca:</label>
              <select class="form-select" id="marca" name="marca" required>
                <option value="" disabled <?= !isset($marca) ? 'selected' : '' ?>>Seleccione una marca</option>
                <?php foreach ($marcas as $indice => $nombreMarca): ?>
                  <option value="<?= $indice ?>" <?= (isset($marca) && (string)$marca === (string)$indice) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($nombreMarca) ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Categorías (Checkboxes dinámicos) -->
            <div class="mb-3">
              <label class="form-label d-block">Categorías:</label>
              <?php foreach ($categorias as $indice => $nombreCategoria): ?>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox"
                    id="cat_<?= $indice ?>"
                    name="categorias[]"
                    value="<?= $indice ?>"
                    <?= (isset($categoriasSeleccionadas) && in_array($indice, $categoriasSeleccionadas)) ? 'checked' : '' ?>>
                  <label class="form-check-label" for="cat_<?= $indice ?>">
                    <?= htmlspecialchars($nombreCategoria) ?>
                  </label>
                </div>
              <?php endforeach; ?>
            </div>

            <!-- Unidades -->
            <div class="mb-3">
              <label for="unidades" class="form-label">Unidades:</label>
              <input type="number" step="1" min="0" class="form-control" id="unidades" name="unidades"
                value="<?= htmlspecialchars($unidades ?? '') ?>" required>
            </div>

            <!-- Precio -->
            <div class="mb-3">
              <label for="precio" class="form-label">Precio (€):</label>
              <input type="number" step="0.01" min="0" class="form-control" id="precio" name="precio"
                value="<?= htmlspecialchars($precio ?? '') ?>" required>
            </div>

            <!-- Botones -->
            <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-warning">Borrar</button>
            <button type="submit" class="btn btn-primary">Crear Artículo</button>
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

      <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

  </div>
</body>

</html>