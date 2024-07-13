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
    <linkrel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="../../../../../css/usuario/modulo.css">
    </head>
  <body style="background: rgb(234 255 246); position:relative">
    <div data-include="../../../../includeSinPHP/ajax_usuario/header_usuario_tema_x.php"></div>
    <main><br><br>
        <div class="container-xl h-100 w-100">
            <div class="d-flex" style="display:flex;display: flex;flex-direction: column;height: 70vh;padding: 1rem;background: white;border-radius: 1rem;box-shadow: 0px 4px 0px green;border: solid 2px green;">
                <div class="bg-white w-100 title" >
                    <div class="d-flex" style="justify-content: center;align-items: center;  justify-content: center;align-items: center;justify-content:center;align-items: center;color: white;border-radius: 0.5rem;margin-bottom: 0.5rem;gap:1rem">
                        <div>  
                            <a href="../inicio.php"> <i class="bi bi-x-lg fs-2 " style="color:grey"></i></a>
                        </div>
                        <div style="flex-grow: 2;">
                            <div class="progress " role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: 10%">10%</div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="bi bi-star-fill fs-1 text-warning me-2"></i>
                                <span class=" start text-warning fs-3" >0</span>
                            </div>
                        </div>
                    </div>  
                </div>
              <div class="container_aprende" style="flex-grow: 2;">
                  <div class="container_pregunta">
                      <h3 class="typed_1"></h3> 
                  </div>
              </div> 
              <div class="boton" style="display: flex;justify-content: center;margin: 0rem 3rem;">
                  <div class="row justify-content-center" >
                    <div class="col-12">
                        <i class="bi bi-arrow-right-circle fs-1 text-success" data-keep-reading="2"></i>
                    </div>
                  </div>
                  <button class="btn btn-success verification_button" style="box-shadow: 0px 4px 0px #173917; display:none" data-siguiente="2" data-verificar="true" >COMPROBAR</button>
              </div>
              
            </div>
        </div>
    </main>
    <div class="marco" style="display: none;" >
      <div class="tiempo" id="tiempo">00:00:00.000</div>
      <div class="botones-contenedor">
        <div class="btn" onclick="iniciar()">
          <i class="fas fa-play"></i>
        </div>
      </div>
    </div>
    <br><br><br><br><br>
    <div data-include="../../../../includeSinPHP/ajax_usuario/footer_rol_usuario.php"></div>
    <script src="../../../../../js/index.js"></script>
    <script src="../../../../../js/include-html.js"></script>
    <div class="container-modal" style="display: none;">
        <div class="w-auto" style="padding-bottom:1rem ;max-width: 500px; min-width: 100px; background: white !important; border-radius: 1rem;">
            <h2 class="" style="    background: #198754; padding: 1rem; color: white; text-align: center;"> ¡Completaste la lección! </h2> 
            <div class="conjunto">
                <div class="row" style="padding:1rem 1rem">
                    <div class="col-6 text-center">
                        <span class=" p-1 px-2 text-white m-1" style="background: rgb(47,47,47);border-radius: 1rem;">Estrella(s)</span><br>
                        <i class="bi bi-star fs-1 border-warning" style="color:rgb(47,47,47)"><span class="cantidad-estrellas fs-4"></span></i>
                    </div>
                    <div class="col-6 text-center">
                        <span class=" p-1 px-2 text-white m-1" style="background: rgb(47,47,47);border-radius: 1rem;">Velocidad</span><br>
                        <i class="bi bi-speedometer fs-1" style="color:rgb(47,47,47)" ><span class="veloz fs-4"></span></i>
                    </div>
                    </div>
                    <div class="row text-center">
                    <div class="col-6">
                        <a href="./tema_1.php" class="text-decoration-none text-secondary"> REPASAR LA LECCIÓN</a>
                    </div>
                    <div class="col-6">
                        <a class="text-decoration-none text-success fw-bold" href="../inicio.php" >CONTINUAR</a>    
                    </div>
                  </div>
              </div>
        </div>
    </div>
    <div class="container-modal-respuesta-incorrecta" style="display: none;" >
        <div class="w-auto" style="padding-bottom:1rem ;max-width: 500px; min-width: 100px; background: rgb(255 214 215) ; border-radius: 1rem;">
            <div class="bg-danger pt-2">
                <h2 style="padding:0.6rem; color: white; text-align: center;"> ¡Respuesta incorrecta! </h2> 
            </div>
            <div class="row text-center" style="padding:1rem 1rem">
                <div class="col-12">
                    <button class="text-decoration-none fw-bold verificar" style="color: rgb(255 75 75);" href="../inicio.php" >CONTINUAR</button>    
                </div>
            </div>
        </div>
    </div>
    <script src="../../../../../js/tema_1.js"></script>
    <script src="../../../../../js/usuario/basico/modulo_1_leccion_1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous">
    </script>
  </body>
</html>