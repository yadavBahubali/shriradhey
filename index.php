<?php
include '_header.php';
?>
<main>
    <section class="container">
        <div class="container-fluid section-s row">
            <div class="col-4 order-2 order-1">
                <div class="overlay text-left">
                    <img src="images/sri.png" class="bg-dark">
                </div>
            </div>
            <div class="col-8 order-1 order-2 text-left">
                <h1 class="smokeh1 text">
                    <span>S</span>
                    <span>H</span>
                    <span>R</span>
                    <span>I</span>
                    <br>
                    <span>R</span>
                    <span>A</span>
                    <span>D</span>
                    <span>H</span>
                    <span>E</span>
                    <span>Y</span>
                    <br>
                    <span>E</span>
                    <span>L</span>
                    <span>E</span>
                    <span>C</span>
                    <span>T</span>
                    <span>R</span>
                    <span>I</span>
                    <span>C</span>
                    <span>A</span>
                    <span>L</span>
                </h1>
            </div>

        </div>
    </section>
    <section class="header">

        <div class="carousel-container d-flex ">
            <h1 class="bg-head text-center">heading</h1>
            <div class="carousel carousel-flex">
                <div id="carouselExample" class="carousel slide align-content-around" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExample" data-slide-to="1"></li>
                        <li data-target="#carouselExample" data-slide-to="2"></li>
                    </ol>

                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/main.png" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/main.png" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/main.png" class="d-block w-100" alt="Image 3">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>











</main>




<?php
include '_footer.php';
?>