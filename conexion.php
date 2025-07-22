<?php
// conexion.php
// Devuelve una conexión MySQLi lista para usar

function obtenerConexion() {
    $host = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $base_de_datos = 'mi_app';
    $conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);
    if ($conn->connect_error) {
        die('Error de conexión: ' . $conn->connect_error);
    }
    return $conn;
} 