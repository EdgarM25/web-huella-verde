<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huella Verde | Crea una cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/create_account.css">
    <link rel="icon" type="image/x-icon" href="../img/icono/icono-main.ico">
    <link rel="stylesheet" href="../css/scrollbar.css">
</head>
<body>
    <header class="shadow z-1 py-2" style=" background:white;   position: sticky; top: 0px;">
        <nav class="navbar  navbar-expand-lg " style="width:100vw">
            <div class="container-fluid">
              <div class="d-lg-inline mx-3 w-25"  >
                <a href="../index.php"><img src="../img/huella-verde-juego-logo.png" class="img-fluid" style="width: 3rem;" alt=""></a>
              </div>
              <button class="navbar-toggler " style="width: 10rem; border:none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ha w-100  p-0">
                    <a href="../index.php">  <img src="../img/5072748.png" class="img-fluid w-25 w-md-50 " alt=""></a>
                </span>
              </button>
              <div class="collapse navbar-collapse " style="  flex-grow: 1;" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-1 w-100  mt-2  mb-lg-0" style="justify-content: end;">
                  <section class="iniciar_crear_sesion">
                    <nav>
                     <a href="log_in.php" class="text-decoraton-none estilos_boton" style="    background: rgb(26 139 87) !important;">Iniciar Sesión</a>
                     <a href="create_account.php" class="text-decoration-none estilos_boton" style="    background: rgb(26 139 87) !important;">Crear una cuenta</a>
                    </nav>
                 </section>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <div class="w-100  h-100 ">
            <img src="../img/montaña-main.png" alt="" class="position-absolute w-100  h-100 ">
            <form action="" class="position-absolute " style="z-index: 99;">
                <legend class="text-center fw-bold " >CREA UNA CUENTA</legend>
                <div id="warning_inicio" class="text-center ">
                    <span style="color: rgb(255, 89, 71);"></span>
                </div>
                <div class="paso_uno">
                    <span style="text-align: center; display:block">¿Qué conocimientos tienes sobre educación ambiental?</span>
                    <div class="wrapper">
                        <input type="radio" name="select" id="option-1" checked>
                        <input type="radio" name="select" id="option-2">
                        <input type="radio" name="select" id="option-3">
                        <label for="option-1" class="option option-1">
                            <div class="dot"></div>
                            <span>Básico</span>
                            </label>
                        <label for="option-2" class="option option-2">
                            <div class="dot"></div>
                            <span>Intermedio</span>
                        </label>
                        <label for="option-3" class="option option-3">
                            <div class="dot"></div>
                            <span>Avanzado</span>
                        </label>
                    </div>   
                    <div class="event_step_one_completed" style="cursor:pointer; display: flex;justify-content: center;"><span style="display:contents; width: 10rem; background-color: white; border-radius: 0.5rem; color: #006545; font-weight: bold;border: solid 2px #006545;cursor: pointer;">Siguiente</span></div>
                </div>
                <div class="paso_dos" style="display:none">
                    <div class="margin__input">
                        <input type="text" placeholder="Usuario" id="usuario">
                    </div>
                    <div class="margin__input">
                        <input type="text" placeholder="Nombre" id="nombre">
                    </div>
                    <div class="margin__input">
                        <input type="text" placeholder="Apellido" id="apellido">
                    </div>
                    <div class="margin__input">
                        <input type="text" placeholder="Correo Electronico" id="correo_electronico">
                    </div>
                    <div class="margin__input">
                        <input type="date" title="Fecha de nacimiento" id="fecha_nacimiento">
                    </div>
                    <div class="margin__input">
                        <input type="password" placeholder="Contraseña" id="contrasena">
                    </div>
                    <div class="margin__input">
                        <input type="password" placeholder="Confirmar Contraseña" id="contrasena_confirmar">
                    </div>
                    <div class="btn_entrar">
                        <input type="submit" value="Registrarse">
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer class="py-4 w-100 " style="background: rgb(48, 48, 48);">
        <div class="d-flex flex-row flex-wrap" style=" margin: 0 auto;width: 50% ; justify-content: space-between">
            <div class="mt-3">
                <p style="color: white;">© 2024 Huella verde· Todos los derechos reservados | Política de privacidad | Aviso legal | Política de cookies | Contacto</p>
            </div>
        </div>
    </footer>
    
    <script src="../js/create_account.js"></script>
</body>
</html>