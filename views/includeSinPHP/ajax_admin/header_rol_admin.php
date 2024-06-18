<header class ="z-1 bg-success" >
        <nav class="navbar  navbar-expand-lg" style="margin: 0rem 1rem;">
            <div class="container-fluid">
                <div class="mx-3 w-25" style="display: flex; align-items: center;"  >
                    <img src="../../img/huella-verde-juego-logo.png" class="img-fluid me-3" style="width: 3rem;" alt="">
                    <div class="styles-boton__usuario">
                      <a href="./inicio.php" class="text-decoration-none ms-3 text-white"><i class="bi bi-person-gear me-1  fs-5 " ></i>Usuarios</a>
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
                            <li><a class="dropdown-item" href="./aviso.php"  Target="_blank">Avisos</a></li>
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