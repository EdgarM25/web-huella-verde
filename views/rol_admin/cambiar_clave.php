<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Huella Verde | Cambiar Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../../img/icono/icono-main.ico">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/scrollbar.css">
    <link rel="stylesheet" href="../../css/admin/inicio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
  <body style="background: rgb(234 255 246); position:relative">

    <div data-include="../includeSinPHP/ajax_admin/header_rol_admin.php"></div>

    <main>
        <div class="container-xxl">
            <span class="fs-5  text_gris text-center"><i class="bi bi-person-gear me-2" ></i>Cambiar Contraseña</span><br><br>
            <di class="modal-body">
                <form>
                        <div class="mb-1">
                          <label for="recipient-name" class="col-form-label">Contraseña Actual:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-1">
                          <label for="recipient-name" class="col-form-label">Contraseña Nueva:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>               
                </form>
            </di>
            <div class="modal-footer mt-2">
                    <a href="./inicio.php" class="text-decoration-none">  <button type="button" class="btn btn-secondary me-2 " data-bs-dismiss="modal">Regresar</button></a>
                    <button type="button" class="btn btn-primary">Modificar</button>
            </div>
        </div>
    </main>
      
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    <div data-include="../includeSinPHP/ajax_admin/footer_rol_admin.php"></div>
      
    <script src="../../js/include-html.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>