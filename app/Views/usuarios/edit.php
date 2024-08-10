<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>

<body>
    <h1>Editar Usuario</h1>
    <form action="/usuarios/update/<?= $usuario['id'] ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?= $usuario['nombre'] ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $usuario['email'] ?>" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena"><br>
        <button type="submit">Actualizar</button>
    </form>

</body>

</html>