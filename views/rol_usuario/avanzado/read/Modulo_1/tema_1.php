<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Huella Verde | Modulo 1, tema 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../../../../../img/icono/icono-main.ico">
    <link rel="stylesheet" href="../../../../../css/reset.css">
    <link rel="stylesheet" href="../../../../../css/scrollbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
  <body style="background: rgb(234 255 246); position:relative">
   
    <div data-include="../../../../includeSinPHP/ajax_usuario/header_usuario_tema_x.php"></div>

    <main><br><br>
        <div class="container-xl h-100 w-100">
            <div class="d-flex" style="display:flex;display: flex;flex-direction: column;height: 70vh;padding: 1rem;background: white;border-radius: 1rem;box-shadow: 0px 4px 0px green;border: solid 2px green;">
              <div class="bg-white w-100 title" >
                <div class="d-flex" style="justify-content: center;align-items: center;  justify-content: center;align-items: center;justify-content:center;align-items: center;background: rgb(93 139 247);color: white;border-radius: 0.5rem;margin-bottom: 0.5rem;gap:1rem">
                  <div>  
                    <button type="button" style="border:none; background:none" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-x-lg text-white fs-2"></i></button>
                  </div>
                  <div>
                    <h1>Introducción a la educación ambiental sostenible</h1>
                  </div>
                  <div>
                  <i class="bi bi-star-fill fs-1 text-warning"></i>
                  </div>
                </div>  
              </div>
              <div class="container_aprende" style="flex-grow: 2;">
                  <div class="mensaje">
                    <p>La educación ambiental es vital para el futuro del planeta, ya que conciencia a la población sobre los problemas ambientales, sus causas, consecuencias y soluciones</p>
                  </div>
              </div>
              <div class="botones" style="     display: flex;justify-content: space-between;margin: 0rem 3rem;">
                  <button type="button" class="btn btn-outline-secondary" style="    box-shadow: 0px 4px 0px #636363;">SALTAR</button>
                  <button class="btn btn-success" style="    box-shadow: 0px 4px 0px #173917;">COMPROBAR</button>
              </div>
            </div>
        </div>
    </main>
  
    <br><br><br><br><br><br><br><br>
    <div data-include="../../../../includeSinPHP/ajax_usuario/footer_rol_usuario.php"></div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">¡Espera!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          ¿Estás seguro de que quieres salir de este tema? <span class="text-danger"> Si te vas, perderás el progreso de este</span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn btn-danger"><a href="../inicio.php" class="text-white text-decoration-none">Si, Seguro</a></button>
          </div>
        </div>
      </div>
    </div>
    <script src="../../../../../js/index.js"></script>
    <script src="../../../../../js/include-html.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>