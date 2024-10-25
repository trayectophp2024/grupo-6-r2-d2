<?php require "partials/header.php" ?>

<main>

    <!-- CARRUSEL -->

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/starwarsfoto1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/starwarsfoto2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/starwarsfoto3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </main>
    <br>


    <!-- CARDS -->

    <div class="container">
     <div class="row  ">


   
    <div class="cartas">
        <div class="face front">
            <img src="img/card 1.jpg" alt="">
            
        </div>
        <div class="face back">
            <h3>STAR WARS</h3>
            <p>Treinta años después de haber derrotado al Imperio, una nueva amenaza se cierne sobre la República. El terrible y enigmático guerrero Kylo Ren ha reunido un ejército de leales al Imperio, que se hace llamar la Primera Orden y ataca a la Alianza. La única esperanza para la galaxia es que una recogedora de chatarra, un stromtrooper fugado y un androide llamado BB-8 logren encontrar a tiempo al legendario jedi Luke Skywalker.</p>
            <div class="link">
                <a href="posicion.php?posicion=peliculas">Peliculas</a>
            </div>
        </div>
    </div>
    


    <div class="cartas">
        <div class="face front">
            <img src="img/card 3.jpg" alt="">
            
        </div>
        <div class="face back">
            <h3>STAR WARS</h3>
            <p>La nave en la que viaja la princesa Leia es capturada por las tropas imperiales al mando del temible Darth Vader. Antes de ser atrapada, Leia consigue introducir un mensaje en su robot R2-D2, quien acompañado de su inseparable C-3PO logra escapar. Tras aterrizar en el planeta Tattooine son capturados y vendidos al joven Luke Skywalker, quien descubrirá el mensaje oculto que va destinado a Obi Wan Kenobi, maestro Jedi a quien Luke debe encontrar para salvar a la princesa.</p>
            <div class="link">
                <a href="posicion.php?posicion=peliculas">Peliculas</a>
            </div>
        </div>
    </div>

    <div class="cartas">
        <div class="face front">
            <img src="img/card 4.jps" alt="">
            
        </div>
        <div class="face back">
            <h3>STAR WARS</h3>
            <p>Ahsoka Tano es un personaje ficticio que aparece en la franquicia Star Wars. Presentada como la padawan jedi de Anakin Skywalker, es un personaje principal en la película animada de 2008 Star Wars: The Clone Wars y la serie de televisión posterior.</p>
            <div class="link">
                <a href="posicion.php?posicion=peliculas">Peliculas</a>
            </div>
        </div>
    </div>




    </div>

    </div>







    <?php require "partials/footer.php" ?>