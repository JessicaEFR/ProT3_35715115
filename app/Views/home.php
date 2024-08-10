<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <!-- Bootstrap CSS via jsDelivr -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">
                <img src="<?= base_url('img/logo.png'); ?>" width="30" height="30" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/'); ?>">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/quienes_somos'); ?>">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/acerca_de'); ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/registrarse'); ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/login'); ?>">Login</a>
                    </li>
                </ul>
                <form class="d-flex" action="<?= base_url('/busqueda'); ?>" method="GET">
                    <input class="form-control me-2" type="search" name="busqueda" placeholder="Buscar"
                        aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Carrusel -->
    <div class="container mt-5">
        <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('img/slide1.jpg'); ?>" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('img/slide2.jpg'); ?>" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('img/slide3.jpg'); ?>" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Contenido -->
    <section class="container mt-5">
        <div class="contenido border rounded p-3 mb-4">
            <h2 class="text-center">Talentos Digitales</h2>
            <p class="text-center">
                Una iniciativa para que los correntinos y las correntinas puedan adquirir los conocimientos y las
                herramientas necesarias para iniciarse en la industria tecnológica y reducir parcialmente la brecha que
                existe entre la demanda y la oferta de trabajo en las actividades informáticas.
            </p>
            <div class="text-center">
                <img src="<?= base_url('img/logoUnne.png'); ?>" alt="Imagen de ejemplo" class="img-fluid rounded">
            </div>
        </div>
    </section>
</body>

</html>