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
                  <button type='button' class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#confirmar'><i class='bi bi-trash'></i></button>
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
    
}
function eliminar() {
    
}