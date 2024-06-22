<?php
  include_once("../../php/admin.php");
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Huella Verde | dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../../img/icono/icono-main.ico">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/admin/tabla.css">
    <link rel="stylesheet" href="../../css/scrollbar.css">
    <link rel="stylesheet" href="../../css/admin/inicio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
<body style="background: rgb(234 255 246);">
    
    <header class ="z-1 bg-success" >
        <nav class="navbar  navbar-expand-lg" style="margin: 0rem 1rem;">
          <div class="container-fluid">
              <div class="mx-3 w-25" style="display: flex; align-items: center;"  >
                  <img src="../../img/huella-verde-juego-logo.png" class="img-fluid me-3" style="width: 3rem;" alt="">
                  <div class="styles-boton__usuario">
                      <a href="./inicio.php" class="text-decoration-none fw-bold ms-3 text-white"><i class="bi bi-person-gear me-1  fs-5 " ></i>Usuarios</a>
                  </div>
              </div>
              <button class="navbar-toggler " style="width: 10rem; border:none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="ha w-100  p-0">
                      <img src="./img/5072748.png" class="img-fluid w-25 w-md-50 " alt="">
                  </span>
              </button>
              <div class="collapse navbar-collapse " style="  flex-grow: 1;" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-1 w-100  mt-2  mb-lg-0" style="justify-content: end;">
                      <section class="iniciar_crear_sesion">
                          <nav style="display:flex; align-items:center;">
                              <a href="./views/log_in.php" class="text-decoration-none text-white" style="display:none">Cerrar sesiòn</a>
                              <div class="dropdown" >
                                  <button class="btn btn-secondary dropdown-toggle h4 bg-success" style="color: white; border: 0;font-size: calc(1.2rem + .1vw);font-weight: 500;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Administrador <i class="bi bi-person-circle"></i>
                                  </button>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./cambiar_clave.php">Cambiar contraseña</a></li>
                                    <li><a class="dropdown-item" Target="_blank" href="./aviso.php">Avisos</a></li>
                                    <li><a class="dropdown-item" href="../log_in.php">Cerrar sesiòn</a></li>
                                  </ul>
                              </div>
                          </nav>
                      </section>
                  </ul>
              </div>
          </div>
        </nav>
    </header>

    <main>
        <section class="usuario " style="    margin: 0rem 1rem;"><br>
            <span class="fs-4 "></i>Escritorio</span><br><br>
                <div class="d-flex flex-row gap-4 ">
                  <div class="total bg-white p-3 " style="border-radius: 0.5rem; max-width:250px; min-width: 300px">
                      <div class="row justify-content-center align-items-center text-center">
                          <div class="col-6">
                              <span class="fs-1">2</span><br>
                              <span class="title">Total</span>
                          </div>
                          <div class="col-6">
                              <i class="bi bi-person fs-1 text-primary "></i>
                          </div>
                      </div>
                  </div>
                  <div class="mayor_edad bg-white p-3" style="border-radius: 0.5rem; max-width:250px;  min-width: 300px">
                      <div class="row justify-content-center align-items-center text-center">
                          <div class="col-6">
                              <span class="fs-1">2</span><br>
                              <span class="title">Mayor de edad</span>
                      </div>
                          <div class="col-6">
                              <i class="bi bi-person fs-1 text-warning"></i>
                          </div>
                      </div>
                  </div>
                  <div class="menor_edad bg-white p-3" style="border-radius: 0.5rem; max-width:250px;  min-width: 300px">
                      <div class="row justify-content-center align-items-center text-center">
                          <div class="col-6">
                              <span class="fs-1">2</span><br>
                              <span class="title">Menor de edad</span>
                      </div>
                          <div class="col-6">
                          <i class="bi bi-person fs-1 text-success"></i>
                      </div>
                      </div>
                  </div>
                </div><br><hr>
                <span class="fs-4 text-gris">Lista</span><br>
                <div class="add-buscar_users mt-3 mb-3 d-flex  justify-content-between align-items-center ">
                    <div class="add">
                        <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="bi bi-person-add me-2"></i>Registrar</button>
                        <button type="button" class="btn btn-info"><i class="bi bi-filetype-pdf"></i> Generar Reportes</button>
                    </div>
                    <div class="buscar_usuario">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Buscar:</span>
                        <input type="search" class="form-control" placeholder="" aria-label="" aria-describedby="addon-wrapping">
                    </div>
                    </div>
                </div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Usuario</th>
                      <th scope="col">Correo electronico</th>
                      <th scope="col">Fecha de nacimiento</th>
                      <th scope="col">Fecha de creaciòn</th>
                      <th scope="col">Nivel de dificultad</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Operaciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php listar(); ?>
                  </tbody>
                </table>
        </section>
    </main>

      <!---Ventana modal para poder registrar los usuario-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title fs-5" id="exampleModalLabel">REGISTRO DE USUARIOS</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <di class="modal-body">
                  <form method="POST" action="../../php/admin.php">
                    <input type="hidden" value="1" name="call" class="form-control" id="recipient-name">
                    <div class="mb-1">
                      <label for="recipient-name" class="col-form-label">Nombre:</label>
                      <input type="text" name="nombre" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-1">
                      <label for="recipient-name" class="col-form-label">Apellido:</label>
                      <input type="text" name="apellido" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-1">
                      <label for="recipient-name" class="col-form-label">Usuario:</label>
                      <input type="text" name="usuario" class="form-control" id="recipient-name">
                    </div>  
                    <div class="mb-1">
                      <label for="recipient-name" class="col-form-label">Correo electronico:</label>
                      <input type="text" name="correo" class="form-control" id="recipient-name">
                    </div>  
                    <div class="mb-1">
                      <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                      <input type="date" name="fechaNacimiento" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-1">
                      <label for="recipient-name" class="col-form-label">Contraseña:</label>
                      <input type="password" name="contrasena" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-1">
                      <div class="mb-3">
                        <label for="" class="form-label">Conocimientos:</label>
                        <select class="form-select form-select-lg" name="nivel" id="">
                          <option selected value="1">Basico</option>
                          <option value="2">Intermedio</option>
                          <option value="3">Avanzado</option>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                  </form>
              </div>
            </div>
      </div>
      <!---Ventana modal para poder modificar los usuario-->
      <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title fs-5 " id="exampleModalLabel">Modificar Usuario</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <di class="modal-body">
                  <form>
                    <div class="mb-">
                      <label for="recipient-name" class="col-form-label">Nombre:</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-">
                      <label for="recipient-name" class="col-form-label">Apellido:</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-1">
                      <label for="recipient-name" class="col-form-label">Usuario:</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>  
                    <div class="mb-1">
                      <label for="recipient-name" class="col-form-label">Correo electronico:</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>  
                    <div class="mb-1">
                      <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                      <input type="date" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-1">
                      <div class="mb-3">
                        <label for="" class="form-label">Conocimientos:</label>
                        <select class="form-select form-select-lg" name="" id="">
                          <option selected>Basico</option>
                          <option value="">Intermedio</option>
                          <option value="">Avanzado</option>
                        </select>
                      </div>
                      
                    </div>
                  </form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-warning">Guardar Cambios</button>
                </div>
              </div>
            </div>
      </div>
      
      <!-- Ventana modal para poder confirmar la eliminacion de los usuarios -->
      <div class="modal fade" id="confirmar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <div class="text-center w-100">
                <h1 class="modal-title fs-5 fw-bold " id="exampleModalLabel">¿Estás seguro?</h1>
                </div>
              </div>
              <div class="modal-body">
                <p>Usando esta opción puedes eliminar completamente la cuenta del usuario. <span class="text-danger">Al eliminar su cuenta, ya no tendrá acceso al aprendizaje de Huella Verde.</span></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger">Seguro</button>
              </div>
            </div>
          </div>
      </div>
        
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
      <footer class="py-4 w-100 " style="background: rgb(48, 48, 48);">
            <div class="d-flex flex-row flex-wrap" style=" margin: 0 auto;width: 90% ; justify-content: center">
                <div class="mt-3">
                    <p style="color: white;">© 2024 Huella verde· Todos los derechos reservados | Política de privacidad | Aviso legal | Política de cookies | Contacto</p>
                </div>
            </div>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>