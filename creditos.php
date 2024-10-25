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






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <h2> </h2>


</body>
</html>


<main class="container"></main>






<?php require "partials/footer.php" ?>