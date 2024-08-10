<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Usuario Logeado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('img/logo.png') ?>" width="30" height="30" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index') ?>">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('quienes_somos') ?>">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('acerca_de') ?>">Acerca de</a>
                    </li>
                </ul>
                <form class="d-flex" action="<?= base_url('busqueda') ?>" method="GET">
                    <input class="form-control me-2" type="search" name="busqueda" placeholder="Buscar"
                        aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container mt-5">
        <div class="text-center">
            <?php if (isset($user_name)): ?>
                <h1>Bienvenido, <?= htmlspecialchars($user_name . ' ' . $user_surname) ?>!</h1>
            <?php else: ?>
                <h1>Bienvenido, usuario desconocido!</h1>
            <?php endif ?>
            <p>Has iniciado sesión exitosamente.</p>
            <a href="<?= base_url('user/logout') ?>" class="btn btn-danger">Cerrar Sesión</a>
        </div>
    </div>
</body>

</html>