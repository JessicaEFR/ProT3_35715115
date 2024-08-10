<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS via jsDelivr -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <img src="<?= base_url('img/logo.png'); ?>" width="30" height="30" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home'); ?>">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('quienes-somos'); ?>">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('acerca-de'); ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('registrarse'); ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('login'); ?>">Login</a>
                    </li>
                </ul>
                <form class="d-flex" action="<?= base_url('busqueda'); ?>" method="GET">
                    <input class="form-control me-2" type="search" name="busqueda" placeholder="Buscar"
                        aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Formulario de Login -->
    <div class="container mt-5 d-flex justify-content-center">
        <div class="col-md-6">
            <div class="text-center">
                <h1>Login</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="w-100 p-3">
                    <form action="<?= base_url('login/authenticate'); ?>" method="POST" class="mt-4">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label text-center d-block">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label text-center d-block">Contraseña:</label>
                            <input type="password" class="form-control" id="password" name="contrasena"
                                placeholder="Contraseña" required>
                        </div>
                        <div class="form-group text-center mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="form-group text-center">
                            <p>¿Aún no estás registrado? <a href="<?= base_url('registrarse'); ?>">Regístrate</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('js/scripts.js'); ?>"></script>
</body>

</html>
