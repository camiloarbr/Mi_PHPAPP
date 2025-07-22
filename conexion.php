<?php
// conexion.php
// Archivo para conectar a la base de datos MySQL

$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'mi_app';

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar conexión
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}
// Si la conexión es exitosa, no se muestra nada 