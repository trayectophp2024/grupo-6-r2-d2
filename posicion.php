<?php
require_once "utils/funciones.php";
require_once "utils/db_connection.php";

/* Capturamos la tabla que viene por GET (URL) */
/* Coalescing  : operador de fusión de null  */
$tabla = $_GET['posicion'] ?? false;


/* Tablas validas  */
$tablas = [
    'personajes' => 'personajes',
    'naves' => 'naves',
    'sables' => 'sables',
    'peliculas' => 'peliculas',
    'creditos'  => 'creditos'
];

/* Comprobar si el array existe */

if (!array_key_exists($tabla, $tablas)) {
    header('Location: error404.php');
}




// Llamar a la funcion

$posicion = listar_todo($conn, $tabla);

/* echo "<pre>";
var_dump($categorias);
echo "</pre>"; 
 */


?>

<?php require "partials/header.php" ?>

<main class="container">
    <div class="row">
        <h1 class="text-center"></h1>

        <?php foreach ($posicion as $posicion) { ?>
            <div class="col-4 mt-4 mb-4">
                <div class="" style="width: 18rem;">
                    <img src="img/ImagenesSW/<?= $posicion['imagen']; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title fs-3 fw-bold mb-3"><?= $posicion['nombre']; ?></h5>
                        <h5 class="card-title text-white fs-6"><?= substr($posicion['descripcion'], 0, 50) ?>...</h5>
                    </div>
                </div>

                <div class="bo mt-2" style="text-align: center">
                    <a href="<?= $tabla ?>_particular.php?posicion=<?= $tabla ?>&id=<?= $posicion['id'] ?>" class="wrapper">
                        <div class="">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            MAS
                        </div>
                    </a>
                </div>

            </div>

        <?php } ?>





    </div>



</main>


<?php require "partials/footer.php" ?>