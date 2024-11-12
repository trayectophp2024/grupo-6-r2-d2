<?php
require_once "utils/funciones.php";
require_once "utils/db_connection.php";

//Capturar lo que pone el usuario, o el termino busqueda
$termino_busqueda = $_GET['q'] ?? '';

$posicion = [];

if ($termino_busqueda) {
    // si hay un termino busqueda, llamamos a la funciona buscar_producto
    $posicion = buscar_productos($conn, $termino_busqueda);
}

?>


<?php require "partials/header.php" ?>
<main>
    <div>
    <h1 class="align-self-start text-center fs-2">Resultados de la búsqueda:</h1>
    </div>

<div class=" justify-content-around ">
    <?php if ($termino_busqueda && !empty($posicion)) {?>
        <div class="row">
            <?php foreach ($posicion as $posicion) { ?>
                <div class="col-4 mt-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/ImagenesSW/<?= $posicion['imagen'] ?> " class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= $posicion['nombre'] ?></h5>
                            <a href="index.php=<?= $posicion['tabla'] ?>&id=<?= $posicion['id'] ?>" class="btn btn-primary">Volver</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
</div>

    <?php } elseif ($termino_busqueda) { ?>
        <p class="text-center text-danger fs-3">No se encontró información de la busqueda: <?= $termino_busqueda ?></p>

    <?php } else { ?>
        <p class="text-center text-danger fs-3"> El campo de busqueda puede estar vacio</p>
    <?php } ?>
</main>


<?php require "partials/footer.php" ?>