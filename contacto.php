<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
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
        <?php $page = "contacto";
            include "nav.php"; ?>
        <section id="contacto">
            <div class="row py-5 px-2">
                <div class="col-12 mt-1">
                    <h1>¡Trabajemos juntos!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h2>Para más detalles sobre mi trabajo podés ver mi <a
                            href="https://www.linkedin.com/in/matias-martin-304a801a7/" target="_blank">Linkedin</a>
                        descargar mi <span> CV</span> o mandarme un <span>mensaje.</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <form action="">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                                    placeholder="NOMBRE" value="">
                            </div>
                            <div class="col-sm-6 col-12 form-group">
                                <input type="email" id="txtCorreo" name="txtCorreo" class="form-control"
                                    placeholder="CORREO" value="">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" id="txtAsunto" name="txtAsunto"
                                    placeholder="ASUNTO">
                            </div>
                            <div class="col-12 form-group">
                                <textarea name="txtMensaje" id="txtMensaje" rows="7" class="form-control"
                                    placeholder="MENSAJE" required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center py-3">
                                <input type="submit" name="btnEnviar" value="ENVIAR" class="btn">
                            </div>
                        </div>
                    </form>
                </div>
        </section>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>