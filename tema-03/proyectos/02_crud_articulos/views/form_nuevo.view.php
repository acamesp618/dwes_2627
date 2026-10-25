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

        <! -- contenido principal de la aplicacion -- >
            <main>
                <div class="content">
                    <form>
                        <h1>Formulario Añadir Artículo</h1>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                        </div>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" required>
                        </div>
                        <div class="mb-3 form-field">
                            <label for="exampleFormControlSelect2" class="form-label">Categoría</label>
                            <select class="form-control" id="unidades">
                                <option>Selecciona uno</option>
                                <option value="1">Portátil</option>
                                <option value="2">PC sobremesa</option>
                                <option value="3">Componente</option>
                                <option value="4">Pantalla</option>
                                <option value="5">Impresora</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Unidades</label>
                            <input type="number" step="1" class="form-control" id="unidades" name="unidades" required>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                        </div>
                        <a href="index.php" class="btn-solid theme-secondary" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-danger" >Reset</button>
                        <button type="submit" class="btn-solid theme-primary" >Añadir</button>
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