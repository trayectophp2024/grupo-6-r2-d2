<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars</title>


    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <!--ICONO-->
    <link rel="icon" href="img/icono sw.png">

</head>




<!-- HEADER -->

<header style="background-color: #1E1E1E;">
    <div class=" upper-header d-flex justify-content-between " >
        <a class= "navbar-brand text-warning fw-bold t fs-1" href="index.php">STAR WARS</a>
        <form action="busqueda.php" method="GET" class="" role="search">
            <div class="input-group bg-warning mt-3">
                <span class="input-group-text">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input class="form-control" name="q" type="search"  aria-label="Search">
                <button class="boton-color" type="submit">Buscar</button>
            </div>

        </form>
    </div>
    <nav>

        <div class="d-flex justify-content-around" id="navbarNav">


            <a class="nav-link" href="posicion.php?posicion=personajes">Personajes</a>

            <a class="nav-link" href="posicion.php?posicion=naves">Naves</a>

            <a class="nav-link" href="posicion.php?posicion=sables">Sables</a>

            <a class="nav-link" href="posicion.php?posicion=peliculas">Peliculas</a>

            <a class="nav-link " href="#">Creditos</a>

        </div>

    </nav>


</header>