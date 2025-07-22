<?php
// guardar.php
// Procesa el guardado del nombre y redirige con mensaje

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'conexion.php';
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    if ($nombre !== '') {
        $conn = obtenerConexion();
        $stmt = $conn->prepare('INSERT INTO usuarios (nombre) VALUES (?)');
        $stmt->bind_param('s', $nombre);
        if ($stmt->execute()) {
            $mensaje = 'Nombre guardado correctamente.';
        } else {
            $mensaje = 'Error al guardar el nombre: ' . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    } else {
        $mensaje = 'El nombre no puede estar vacío.';
    }
    header('Location: index.php?mensaje=' . urlencode($mensaje));
    exit;
} else {
    header('Location: index.php?mensaje=' . urlencode('Acceso no permitido.'));
    exit;
} 