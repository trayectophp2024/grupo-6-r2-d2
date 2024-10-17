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
<div class="upper-header d-flex align-items-center ">
               <a class="titulo-1" href="index.php">
                    <h1>Star wars </h1>
                </a> 
                <form action="busqueda.php">
                    <div class="input-group">
                        <input type="text" name="q" id="search" class="form-control" >
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
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