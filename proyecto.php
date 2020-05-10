<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/css/style.css">
    <script type="text/javascript" src="js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</head>



<body>




    <div class="container">


        <nav class="navbar navbar-expand-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre mi.php">Sobre mí</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="proyecto.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>








        <section id="contacto">
            <div class="row py-sm-5 py-3">
                <div class="col-12">
                    <h1>Mis Proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Estos son algunos de los trabajos que he realizado:</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-sm-6">
                    <div class="bg-white">
                        <div class="row px-2">
                            <div class="col-12">
                                <img src="images/abmclientes.png" alt="ABM Cliente" class="img-fluid">
                                <h2>ABM Clientes</h2>
                                <p>Alta, Baja, modificación de un registro de clientes Realizado en HTML,
                                    CSS, PHP,Bootstrap y Json.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mx-3">
                                <a href="" class="btn">Ver online</a>
                            </div>
                            <div class="col-12 text-right">
                                <a href="https://github.com/matiasmartin42">Codigo Fuente</a>
                                
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 px-4">
                    <div class="bg-white">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/sistema-admin.png" alt="ABM Sistema" class="img-fluid">
                                <h2>Proyecto integrador</h2>
                                <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML,
                                    CSS, con panel administrador, gestor de usuarios, módulo de permisos y
                                    funcionalidades a fines.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mx-3">
                                <a href="" class="btn">Ver online</a>
                            </div>
                            <div class="col-12 text-right">
                                <a href="https://github.com/matiasmartin42">Codigo Fuente</a>
                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="bg-white">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/abmventas.png" alt="ABM ventas" class="img-fluid">
                                <h2>Sistema de gestion de ventas</h2>
                                <p>Gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap,
                                    Js, Ajax, jQuery y MySQL de base de datos.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mx-3">
                                <a href="" class="btn">Ver online</a>
                            </div>
                            <div class="col-12 text-right ">
                                <a href="https://github.com/matiasmartin42">Codigo Fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <?php include "footer.php"; ?>
</body>

</html>