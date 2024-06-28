<?php
  session_start();
?>
<header class="z-1 py-0 bg-success" style=" background:white; ">
            <div class="row" style="    width: 100%;">
                <div class="col-2"></div>
                <div class="col-lg-8 col-12">
                <nav class="navbar  navbar-expand-lg ">
                <div class="container-fluid">
                <div class="d-lg-inline mx-3 w-25"  >
                    <a href="../welcome/bienvenido.php"><img src="../../../../img/huella-verde-juego-logo.png" class="img-fluid" style="width: 3rem;" alt=""></a>
                </div>
                <button class="navbar-toggler " style="width: 10rem; border:none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ha w-100  p-0">
                        <img src="./img/5072748.png" class="img-fluid w-25 w-md-50 " alt="">
                    </span>
                </button>
                <div class="collapse navbar-collapse " style="  flex-grow: 1;" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-1 w-100  mt-2  mb-lg-0" style="justify-content: end;">
                    <div class="dropdown  bg-success">
                        <button class="btn btn-secondary dropdown-toggle h4  bg-success" style="    
                        color: white;
                        border: 0;
                        background: rgb(47,47,47);
                        font-size: calc(1.2rem + .1vw);
                        font-weight: 500;
                        " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if(isset($_SESSION)){
                                            echo($_SESSION['usuario']);
                                          }
                                          else{echo("Usuario");} ?> <i class="bi bi-person-circle"></i>

                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./inicio.php">Inicio</a></li>
                        <li><a class="dropdown-item" href="./progreso.php">Progreso</a></li>
                        <li><a class="dropdown-item" target="_blank" href="./aviso.php">Avisos </a></li>
                        <li><a class="dropdown-item" href="../../../log_in.php">Cerrar sesion</a></li>
                        </ul>
                    
                </div>
                    </ul>
                </div>
                </div>
            </nav>
                </div>
                <div class="col-2"></div>
            </div>
        </header>