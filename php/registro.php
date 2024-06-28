<?php
include_once("conexionBD.php");
$db = abrirConexion();

if(isset($_POST['basico'])){
    $nivel = 1;
}
elseif(isset($_POST['intermedio'])){
    $nivel = 2;
}
elseif(isset($_POST['avanzado'])){
    $nivel = 3;
}

$idRol = 2;
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fechaCreacion = date("Y-m-d");
$fechaNacimiento = $_POST['fechaNacimiento'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(id_rol, usuario, clave, estado, fecha_creacion) VALUES (:idRol, :usuario, :contrasena, b'1', :fechaCreacion);";
$llamado = $db->prepare($query);
$llamado->bindParam(':idRol', $idRol);
$llamado->bindParam(':usuario', $usuario);
$llamado->bindParam(':contrasena', $contrasena);
$llamado->bindParam(':fechaCreacion', $fechaCreacion);
$llamado->execute();

$query = "SELECT MAX(id_usuario) AS IDs FROM usuarios";
$llamado = $db->prepare($query);
$llamado->execute();
$data = $llamado->fetch(PDO::FETCH_ASSOC);
$idUSuario = $data['IDs'];

$query = "INSERT INTO personas(id_usuario, id_nivel_dificultad, nombre, apellido, correo_electronico, fecha_nacimiento) VALUES (:idUsuario, :idNivel, :nombre, :apellido, :correo, :fechaNacimiento);";
$llamado = $db->prepare($query);
$llamado->bindParam(':idUsuario', $idUSuario);
$llamado->bindParam(':idNivel', $nivel);
$llamado->bindParam(':nombre', $nombre);
$llamado->bindParam(':apellido', $apellido);
$llamado->bindParam(':correo', $correo);
$llamado->bindParam(':fechaNacimiento', $fechaNacimiento);
$llamado->execute();

header("location:../views/log_in.php");
