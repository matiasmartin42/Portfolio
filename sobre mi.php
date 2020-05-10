<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
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
        <?php $page = "sobre-mi";
        include "nav.php"; ?> 
        <section id="sobre mi">
            <div class="row">
                <div class="col-12 col-sm-6 my-5">
                    <h1>Sobre mi</h1>
                    <h2>Desarrollador FullStack, Recien empezando en el ambito de la programacion</h2>
                    <a href="" class="btn my-4" target="_blank">Descargar CV</a>
                </div>
                <div class="col-sm-3 col-9 mx-5">
                    <img src="images/fotoprueba.jpg" alt="Matias Gabriel Martin" title="Matias Gabriel Martin"
                        class="img-fluid img-circle">
                </div>
            </div>
            <div class="row my-sm-4 my-3">
                <div class="col-sm-6 col-12 px-2 my-2">
                    <div class="bg-blanco">
                        <div class="p-3 text-center"><i class="fas fa-code"></i></div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>PROGRAMACIÓN</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>HTML, CSS, Bootstrap, PHP, POO, MVC, Framework Laravel, Javascript, jQuery, React.js,
                                    AJAX, REST API, WSDL, JSON, C, C++, ASP.NET, C#.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2 my-2">
                    <div class="bg-blanco">
                        <div class="p-3 text-center"><i class="fas fa-database"></i></div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>BASE DE DATOS</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>MySQL/MariaDB, MS SQL Server, PostgreSQL, LDAP, Mongo DB.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2 my-2">
                    <div class="bg-blanco">
                        <div class="icon text-center p-3"><i class="fas fa-language"></i></div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>IDIOMAS</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>INGLES - Basico B2<br>ESPAÑOL - Nativo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2 my-2">
                    <div class="bg-blanco">
                        <div class="p-3 text-center"><i class="fas fa-window-restore"></i></div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>SOFTWARE</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>GIT, GitHub, Visual Code, Adobe Illustrator, Google Docs. Redmine.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2 my-2">
                    <div class="bg-blanco">
                        <div class="p-3 text-center p-3"><i class="fas fa-puzzle-piece"></i></div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>HOBBIES</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>Musica <br> Ver Paisajes <br> Deporte</p>
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