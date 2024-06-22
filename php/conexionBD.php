<?php

function abrirConexion() {
    // Definir las credenciales de la base de datos
    $host = "localhost"; // Servidor de la base de datos
    $dbname = "huella_verde"; // Nombre de la base de datos
    $username = "root"; // Nombre de usuario de la base de datos
    $password = ""; // Contraseña de la base de datos (Dejar variable vacia si el usuario no requiere contrasena)

    // Intentar la conexión a la base de datos
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Error de conexión a la base de datos: " . $e->getMessage() . "\n";
        die();
    }

    return $db;
};