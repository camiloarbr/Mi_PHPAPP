<?php
// guardar.php
// Recibe el nombre del formulario y lo guarda en la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Incluir la conexión a la base de datos
    require 'conexion.php';

    // Obtener el nombre enviado por el formulario y limpiar entrada
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';

    if ($nombre !== '') {
        // Preparar la consulta para evitar inyección SQL
        $stmt = $conn->prepare('INSERT INTO usuarios (nombre) VALUES (?)');
        $stmt->bind_param('s', $nombre);
        if ($stmt->execute()) {
            echo 'Nombre guardado correctamente.';
        } else {
            echo 'Error al guardar el nombre: ' . $stmt->error;
        }
        $stmt->close();
    } else {
        echo 'El nombre no puede estar vacío.';
    }
    $conn->close();
} else {
    echo 'Acceso no permitido.';
} 