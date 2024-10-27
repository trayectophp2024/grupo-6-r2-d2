<?php
require_once "utils/funciones.php";
require_once "utils/db_connection.php";

$tabla = $_GET['posicion'] ?? FALSE;
$id = $_GET['id'] ?? FALSE;

$posiciones = posicion_particular($conn, $tabla, $id);

/* echo "<pre>";
    var_dump($productos);
    echo "</pre>"; */

    /* Obtener nombre del produto */

    $posicion = $posiciones[0] ?? NULL;

   /*  echo "<pre>";
        var_dump($producto);
    echo "</pre>";  */

?>


<?php require "partials/header.php" ?>

<main class="container">



    <?php foreach($posiciones as $posicion) {  ?>
    <div class="card mb-3 mx-auto mt-5" style="max-width: 740px;">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="img/ImagenesSW/<?= $posicion['imagen'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title"><?= $posicion['nombre'] ?></h5>
                    <p class="card-text"><?= $posicion['descripcion'] ?></p>
                    <p class="card-text">Color: <?= $posicion['color'] ?></p>
                    <p class="card-text">Afiliación: <?= $posicion['afiliacion'] ?></p>
                    <p class="card-text">Propietario: <?= $posicion['propietario'] ?></p>
                    <p class="card-text">Cristal: <?= $posicion['cristal'] ?></p>
                    <a href="posicion.php?posicion=sables"  class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

</main>

<?php require "partials/footer.php" ?>