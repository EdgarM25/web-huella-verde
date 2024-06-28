<?php

include_once("conexionBD.php");
$db = abrirConexion();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasenaVal = $_POST['contrasenaVal'];

if($contrasena == $contrasenaVal) {
    $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND clave = :contrasena";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':usuario', $usuario);
    $llamado->bindParam(':contrasena', $contrasena);
    $llamado->execute();

    $data = $llamado->fetch(PDO::FETCH_ASSOC);
    
    if($usuario == $data['usuario'] && $contrasena == $data['clave']) {
        switch($data['id_rol']){
            case 1:
                $query = "SELECT * FROM personas WHERE id_usuario = " . $data['id_usuario'];
                $llamado = $db->prepare($query);
                $llamado->execute();

                $dataUsuario = $llamado->fetch(PDO::FETCH_ASSOC);

                session_start();
                $_SESSION['usuario'] = $data['usuario'];
                $_SESSION['nombre'] = $dataUsuario['nombre'] . " " . $dataUsuario['apellido'];
                
                header("location: /views/rol_admin/inicio.php");
                break;
            case 2:
                $query = "SELECT * FROM personas WHERE id_usuario = " . $data['id_usuario'];
                $llamado = $db->prepare($query);
                $llamado->execute();

                $dataUsuario = $llamado->fetch(PDO::FETCH_ASSOC);

                session_start();
                $_SESSION['usuario'] = $data['usuario'];
                $_SESSION['nombre'] = $dataUsuario['nombre'] . " " . $dataUsuario['apellido'];
                
                switch($dataUsuario['id_nivel_dificultad']){
                    case 1:
                        header("location: ../views/rol_usuario/basico/welcome/bienvenido.php");
                        break;
                    case 2:
                        header("location: ../views/rol_usuario/intermedio/welcome/bienvenido.php");
                        break;
                    case 3:
                        header("location: ../views/rol_usuario/avanzado/welcome/bienvenido.php");
                        break;
                }
                break;
        }
    }
}
else{
    echo("Contrasena no coincide");
}