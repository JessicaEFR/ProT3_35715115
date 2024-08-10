<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('quienes-somos'); ?>">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('acerca-de'); ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('registrarse'); ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                    </li>
                </ul>
                <form class="d-flex" action="<?= base_url('busqueda'); ?>" method="GET">
                    <input class="form-control me-2" type="search" name="busqueda" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Cards -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url('img/person1.jpg'); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Valentina García</h5>
                        <p class="card-text">Valentina es una apasionada del marketing digital. Tiene una maestría en
                            Comunicación y ha trabajado en varias agencias de publicidad antes de unirse a nuestra
                            empresa. Le encanta viajar y es una entusiasta del yoga.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url('img/person2.jpg'); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: Eduardo Fernández</h5>
                        <p class="card-text">Eduardo tiene una vasta experiencia en consultoría empresarial. Ha
                            trabajado en importantes empresas multinacionales y es un experto en estrategias de
                            crecimiento. Fuera del trabajo, disfruta de la jardinería y la música clásica.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url('img/person3.jpg'); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Martín López</h5>
                        <p class="card-text">Martín es un apasionado de la programación. Se graduó en Ciencias de la
                            Computación y se unió a nuestra empresa como becario. Le encanta experimentar con nuevas
                            tecnologías y sueña con crear su propio videojuego algún día.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('js/scripts.js'); ?>"></script>
</body>

</html>
