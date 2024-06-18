<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huella Verde | Inicia sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/log_in.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="icon" type="image/x-icon" href="../img/icono/icono-main.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
</head>
<body>
    <header class="shadow z-1 py-3" style=" background:white;   position: sticky; top: 0px;">
        <nav class="navbar  navbar-expand-lg " style="width:100%">
            <div class="container-fluid">
              <div class="d-lg-inline mx-3 w-25"  >
                <a href="../index.php"><img src="../img/huella-verde-juego-logo.png" class="img-fluid" style="width: 3rem;" alt=""></a>
              </div>
              <button class="navbar-toggler " style="width: 10rem; border:none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ha w-100  p-0">
                    <a href="../index.php"><img src="../img/5072748.png" class="img-fluid w-25 w-md-50 " alt=""></a>
                </span>
              </button>
              <div class="collapse navbar-collapse " style="  flex-grow: 1;" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-1 w-100  mt-2  mb-lg-0" style="justify-content: end;">
                  <section class="iniciar_crear_sesion">
                    <nav>
                     <a href="log_in.php" class="text-decoraton-none estilos_boton" style="text-decoration:none; background: rgb(26 139 87) !important;">Iniciar Sesión</a>
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
            <form action="" class="position-absolute " style="    z-index: 99;">
                <legend class="text-center fw-bold " style="color: rgb(26 139 87) !important">INICIA SESIÓN</legend>
                <div id="warning_inicio" class="text-center ">
                    <span style="color: rgb(255, 89, 71);"></span>
                </div>
                <div class="margin__input">
                     <input type="text" placeholder="Usuario" id="usuario">
                </div>
                <div class="margin__input">
                     <input type="password" placeholder="Contraseña" id="contrasena">
                </div>
                <div class="margin__input">
                     <input type="password" placeholder="Confirmar Contraseña" id="contrasena_confirmar">
                </div>
                <div class="btn_entrar">
                    <input type="submit" value="Entrar" style="color: rgb(26 139 87)">
                </div>
                <div style="text-align: center; margin-top: 0.7rem;">
                    <span>¿No registrado? <a href="./create_account.php" class="verde" style="text-decoration: none;">Crear una cuenta</a></span>
                </div>
            </form>
        </div>
    </main>

    <footer class="py-4 w-100 " style="background: rgb(48, 48, 48);">
        <div class="d-flex flex-row flex-wrap" style=" margin: 0 auto;width: 90% ; justify-content: space-between">
            <div class="mt-3">
                <p style="color: white;">© 2024 Huella verde· Todos los derechos reservados | Política de privacidad | Aviso legal | Política de cookies | Contacto</p>
            </div>
        </div>
    </footer>
    
    <script src="../js/validation_login.js"></script>
</body>
</html>