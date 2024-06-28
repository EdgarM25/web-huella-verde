<?php

include_once("conexionBD.php");


if(isset($_POST['call'])){
    switch($_POST['call']){
        case 1:
            agregar();
            break;
        case 2:
            modificar();
            break;
        case 3:
            eliminar();
            break;
    }
}

function listar() {
    $db = abrirConexion();
    $query = "SELECT personas.*, usuarios.usuario, usuarios.estado, usuarios.fecha_creacion, niveles_dificultad.nivel_dificultad FROM personas 
	            INNER JOIN niveles_dificultad
                INNER JOIN usuarios
                WHERE personas.id_usuario = usuarios.id_usuario
                AND personas.id_nivel_dificultad = niveles_dificultad.id_nivel_dificultad";
    $llamado = $db->prepare($query);
    $llamado->execute();

    $data = $llamado->fetchAll(PDO::FETCH_ASSOC);

    if($data != NULL){
        foreach($data as $key => $value){
            if($value['estado'] == 0){
                $estado = "Inactivo";
            }
            else{
                $estado = "Activo";
            }
            
            $tabla = "
            <tr>
                <th scope='row" . $value['id_persona'] . "'>" . $value['id_persona'] . "</th>
                <td>" . $value['nombre'] . "</td>
                <td>" . $value['apellido'] . "</td>
                <td>" . $value['usuario'] . "</td>
                <td>" . $value['correo_electronico'] . "</td>
                <td>" . $value['fecha_nacimiento'] . "</td>
                <td>" . $value['fecha_creacion'] . "</td>
                <td>" . $value['nivel_dificultad'] . "</td>
                <td>" . $estado . "</td>
                <td>
                  <button type='button' class='btn btn-warning me-2' data-bs-toggle='modal' data-bs-target='#exampleModal-2' data-bs-whatever='@mdo'><i class='bi bi-pencil-square text-darke'></i></button>
                <div class='modal fade' id='exampleModal-2' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h2 class='modal-title fs-5 ' id='exampleModalLabel'>Modificar Usuario</h2>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                <form action='../../php/admin.php' method='POST'>
                                    <input type='hidden' name='call' value='2' class='form-control' id='recipient-name'>
                                    <input type='hidden' name='id' value='" . $value['id_usuario'] . "' class='form-control' id='recipient-name'>
                                    <div class='mb-'>
                                        <label for='recipient-name' class='col-form-label'>Nombre:</label>
                                        <input type='text' name='nombre' class='form-control' id='recipient-name'>
                                    </div>
                                    <div class='mb-'>
                                        <label for='recipient-name' class='col-form-label'>Apellido:</label>
                                        <input type='text' name='apellido' class='form-control' id='recipient-name'>
                                    </div>
                                    <div class='mb-1'>
                                        <label for='recipient-name' class='col-form-label'>Usuario:</label>
                                        <input type='text' name='usuario' class='form-control' id='recipient-name'>
                                    </div>  
                                    <div class='mb-1'>
                                        <label for='recipient-name' class='col-form-label'>Correo electronico:</label>
                                        <input type='text' name='correo' class='form-control' id='recipient-name'>
                                    </div>  
                                    <div class='mb-1'>
                                        <label for='recipient-name' class='col-form-label'>Fecha de nacimiento:</label>
                                        <input type='date' name='fechaNacimiento' class='form-control' id='recipient-name'>
                                    </div>
                                    <div class='mb-1'>
                                        <div class='mb-3'>
                                            <label for='' class='form-label'>Conocimientos:</label>
                                            <select class='form-select form-select-lg' name='nivel' id=''>
                                                <option value='1' selected>Basico</option>
                                                <option value='2'>Intermedio</option>
                                                <option value='3'>Avanzado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                                        <button type='submit' class='btn btn-warning'>Guardar Cambios</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                  <button type='button' class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#confirmar'><i class='bi bi-trash'></i></button>
                    <div class='modal fade' id='confirmar' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <div class='text-center w-100'>
                              <h1 class='modal-title fs-5 fw-bold ' id='exampleModalLabel'>¿Estás seguro?</h1>
                              </div>
                            </div>
                            <div class='modal-body'>
                              <p>Usando esta opción puedes eliminar completamente la cuenta del usuario. <span class='text-danger'>Al eliminar su cuenta, ya no tendrá acceso al aprendizaje de Huella Verde.</span></p>
                            </div>
                            <div class='modal-footer'>
                              <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                            <form action='../../php/admin.php' method='POST'>
                                <input type='hidden' name='call' value='3' />
                                <input type='hidden' name='id' value='" . $value['id_usuario'] ."' />
                                <button type='submit' class='btn btn-danger'>Seguro</button>
                            </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </td>
            </tr>
            ";

            echo($tabla);
        }
    }
    else{
        $tabla = "<tr>No se encuentra ningun usuario</tr>";

        echo($tabla);
    }
}
function agregar() {
    $db = abrirConexion();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $idRol = 2;
    $fechaCreacion = date("Y-m-d");
    $correo = $_POST['correo'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $contrasena = $_POST['contrasena'];
    $nivel = $_POST['nivel'];
    
    $query = "INSERT INTO usuarios(id_rol, usuario, clave, estado, fecha_creacion) VALUES (:idRol, :usuario, :clave, b'1', :fechaCreacion)";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':idRol', $idRol);
    $llamado->bindParam(':usuario', $usuario);
    $llamado->bindParam(':clave', $contrasena);
    $llamado->bindParam(':fechaCreacion', $fechaCreacion);
    $llamado->execute();

    $query = "SELECT MAX(id_usuario) AS IDs FROM usuarios";
    $llamado = $db->prepare($query);
    $llamado->execute();
    $data = $llamado->fetch(PDO::FETCH_ASSOC);

    $idUSuario = $data['IDs'];

    $query = "INSERT INTO personas(id_usuario, id_nivel_dificultad, nombre, apellido, correo_electronico, fecha_nacimiento) VALUES (:idUsuario, :idNivel, :nombre, :apellido, :correo, :fechaNacimiento)";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':idUsuario', $idUSuario);
    $llamado->bindParam(':idNivel', $nivel);
    $llamado->bindParam(':nombre', $nombre);
    $llamado->bindParam(':apellido', $apellido);
    $llamado->bindParam(':correo', $correo);
    $llamado->bindParam(':fechaNacimiento', $fechaNacimiento);
    $llamado->execute();

    header("location:../views/rol_admin/inicio.php");
}
function modificar() {
    $db = abrirConexion();

    $idUsuario = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $nivel = $_POST['nivel'];
    
    $query = "UPDATE usuarios SET usuario = :usuario WHERE id_usuario = :idUsuario";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':usuario', $usuario);
    $llamado->bindParam(':idUsuario', $idUsuario);
    $llamado->execute();

    $query = "UPDATE personas SET id_nivel_dificultad = :idNivel, nombre = :nombre, apellido = :apellido, correo_electronico = :correo, fecha_nacimiento = :fechaNacimiento WHERE id_usuario = :idUsuario";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':idNivel', $nivel);
    $llamado->bindParam(':nombre', $nombre);
    $llamado->bindParam(':apellido', $apellido);
    $llamado->bindParam(':correo', $correo);
    $llamado->bindParam(':fechaNacimiento', $fechaNacimiento);
    $llamado->bindParam(':idUsuario', $idUsuario);
    $llamado->execute();

    header("location:../views/rol_admin/inicio.php");
}
function eliminar() {
    $db = abrirConexion();

    $id = $_POST['id'];

    $query = "DELETE FROM personas WHERE id_usuario = :id";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':id', $id);
    $llamado->execute();

    $query = "DELETE FROM usuarios WHERE id_usuario = :id";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':id', $id);
    $llamado->execute();

    header("location:../views/rol_admin/inicio.php");
}