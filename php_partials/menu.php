<nav class="navbar navbar-expand-lg" style="background-color: #EF2100">
    <div class="container-fluid">
        <!-- Botón de hamburguesa para pantallas pequeñas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenedor para alinear elementos en la barra de navegación -->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- Marca de la barra de navegación (oculta en pantallas pequeñas) -->
            <a class="navbar-brand" href="/cromos/index.php"> <img src="/cromos/media/iconPokemon.png" alt="Bootstrap" width="100" height="50"></a>

            <!-- Lista de elementos de la barra de navegación -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Elemento de la barra de navegación - Página activa -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/cromos/php_views/coleccionCromos.php">Pokedex</a>
                </li>
                <!-- Elemento de la barra de navegación - Enlace normal -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Generaciones</a>
                </li>
                <!-- Elemento de la barra de navegación - Enlace deshabilitado -->
                <li class="nav-item">
                    <a class="nav-link ">Otros</a>
                </li>
            </ul>

            <!-- Formulario de búsqueda en la barra de navegación -->
            <form class="d-flex" role="search">
                <!-- Input de búsqueda -->
                <input class="form-control form-control-end me-1" type="search" name="filter" placeholder="Buscar pokemon" aria-label="Search">
                <!-- Botón de búsqueda -->
                <button class="btn btn-outline-light mx-1" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div>
</nav>