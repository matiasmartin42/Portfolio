<nav class="navbar navbar-expand-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navbar-toggler-icon fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == "inicio") echo "active" ?>" href="inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == "sobre-mi") echo "active" ?>" href="sobre mi.php">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == "proyecto") echo "active" ?>" href="proyecto.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == "contacto") echo "active" ?>" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>