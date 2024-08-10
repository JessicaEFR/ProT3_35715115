<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
    <!-- Bootstrap CSS via jsDelivr -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
    <style>
        #mapa {
            height: 400px;
        }
    </style>
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
                    <li class="nav-item active">
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
                    <input class="form-control me-2" type="search" name="busqueda" placeholder="Buscar"
                        aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Contenido de Acerca de -->
    <div class="container mt-5">
        <h1>Acerca de Nuestra Empresa</h1>
        <p>Información sobre la empresa...</p>
        <div id="mapa"></div>
        <p>Dirección: Calle Falsa 123, Ciudad, País</p>
        <p>Teléfono: +1 234 567 890</p>
    </div>

    <!-- Integración de Leaflet.js para el mapa -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
    <script>
        var map = L.map('mapa').setView([-34.6083, -58.3712], 16); // Coordenadas de la Casa Rosada

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
            maxZoom: 18,
        }).addTo(map);

        L.marker([-34.6083, -58.3712]).addTo(map)
            .bindPopup('Casa Rosada, Buenos Aires, Argentina')
            .openPopup();
    </script>

    <script src="<?= base_url('js/scripts.js'); ?>"></script>
</body>

</html>
