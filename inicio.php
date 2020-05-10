<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
    <div class="container inicio">
    <?php $page = "inicio";
    include "nav.php"; ?>
        <section>
            <div class="row py-5">
                <div class="col-12 col-sm-6">
                    <h1>Hola!!<br>Bienvenidos a mi pagina web</h1>
                    <h2>Matias Gabriel Martin</h2>
                    <a href="proyecto.php" class="btn">Mira mis proyectos!!</a>
                </div>
            </div>
        </section>
    </div>

    <?php include "footer.php"; ?>
</body>

</html>