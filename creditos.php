<?php
require "partials/header.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>video</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <main id="hero">
        <div class="starwars">
            <h2 class="lh-lg mb-5"> DISEÑADO POR EL CURSO DE DESARROLLO WEB: TURNO NOCHE <br>
                GIMENEZ CRISTALDO, CAMILA <br>
                MORALES, EDUARDO <br>
                BARTOLUCCI S. VICENTE<br>
            </h2>
            <h2 class="lh-lg mb-5">DESARROLLADO POR EL CURSO DE PROGRAMACION: TURNO TARDE <br>
                CARLOS FATTURINI BARASSI</h2>
            <button class="but" type="inicio">INICIO
                <a href="index.php"></a>
            </button>
        </div>
        <video muted autoplay loop>
            <source src="video/Star Wars video.mp4" type="video/mp4">
        </video>
        <div class="capa"></div>

        <button class="link">INICIO
                <a href="index.php"></a>
        </button>


    </main>

</body>

</html>



<?php require "partials/footer.php" ?>