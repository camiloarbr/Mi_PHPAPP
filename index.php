<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingresar Nombre</title>
</head>
<body>
    <h1>Ingresar Nombre</h1>
    <?php if (isset($_GET['mensaje'])): ?>
        <p><?php echo htmlspecialchars($_GET['mensaje']); ?></p>
    <?php endif; ?>
    <!-- Formulario para ingresar el nombre -->
    <form action="guardar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" maxlength="100" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
