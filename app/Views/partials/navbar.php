<!-- app/Views/partials/navbar.php -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/'); ?>">
            <img src="<?= base_url('img/logo.png'); ?>" width="30" height="30" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <input class="form-control me-2" type="search" name="busqueda" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
