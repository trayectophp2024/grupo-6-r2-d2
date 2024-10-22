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

    <br>


    <!-- CARDS -->
     <div class="row">
    <div class="card">
        <div class="face front">
            <img src="img/card 1.jpg" alt="">
            <h3>STAR WARAS</h3>
        </div>
        <div class="face back">
            <h3>STAR WARS</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
            <div class="link">
                <a href="#">Details</a>
            </div>
        </div>
    </div>
    

    <div class="card">
        <div class="face front">
            <img src="img/card 2.jpg" alt="">
            <h3>STAR WARS</h3>
        </div>
        <div class="face back">
            <h3>STAR WARS</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
            <div class="link">
                <a href="#">Details</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="face front">
            <img src="img/card 3.jpg" alt="">
            <h3>STAR WARS</h3>
        </div>
        <div class="face back">
            <h3>STAR WARS</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
            <div class="link">
                <a href="#">Details</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="face front">
            <img src="img/card 4.jps" alt="">
            <h3>STAR WARS</h3>
        </div>
        <div class="face back">
            <h3>STAR WARS</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
            <div class="link">
                <a href="#">Details</a>
            </div>
        </div>
    </div>

    </div>









    <?php require "partials/footer.php" ?>