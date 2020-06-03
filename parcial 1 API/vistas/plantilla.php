<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ejemplo mvc</title>
    <!-- pluggins de css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- pluggins js -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Latest font awesome -->
    <script src="https://kit.fontawesome.com/f7458be64a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <h3 class="text-center py-3">primer parcial de aplicaciones para internet</h3>
    </div>
    <!-- botones -->
    <div class="container-flui bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if (isset($_GET["paginas"])) : ?>
                    <?php if ($_GET["paginas"] == "registro") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?paginas=registro">Registro</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?paginas=registro">Registro</a>
                        </li>
                    <?php endif ?>
                    <?php if ($_GET["paginas"] == "consulta") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?paginas=consulta">Consultar peliculas</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?paginas=consulta">Consultar peliculas</a>
                        </li>
                    <?php endif ?>


                <?php else : ?>
                    <!-- GET: $_GET["variable"] variables que se pasan como parametros via url
                            (tambien conocido como cadena de consulta a traves de la URL)
                            cuando es la primera variable se separa con ?
                            las que siguen a continuacion se separan con &
                        -->
                    <li class="nav-item">
                        <a class="nav-link active " href="index.php?paginas=registro">Registro</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="index.php?paginas=consulta">Consultar peliculas</a>
                    </li>

                <?php endif ?>


            </ul>
        </div>
    </div>
    <!-- contenido -->
    <div class="container-fluid bg-light">
        <div class="container py-5">
            <!-- el py define el espaciado vertical -->
            <?php
            #ISSET: isset() determina si una variable esta definida y no es NULL
            if (isset($_GET["paginas"])) {
                if (
                    $_GET["paginas"] == "registro" ||
                    $_GET["paginas"] == "consulta") {
                    include "paginas/" . $_GET["paginas"] . ".php";
                } else {
                    include "paginas/error404.php";
                }
            } else {
                include "paginas/consulta.php";
            }
            ?>
        </div>
    </div>
</body>

</html>