<div class="container">
    <h1>Galería de Imágenes</h1>
    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#imageCarousel" data-slide-to="1"></li>
            <li data-target="#imageCarousel" data-slide-to="2"></li>
            <li data-target="#imageCarousel" data-slide-to="3"></li>
            <li data-target="#imageCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo base_url(); ?>/assets/img/huerta.jpeg" alt="Huerta 1">
            </div>

            <div class="item">
                <img src="<?php echo base_url(); ?>/assets/img/huertaprimera.jpeg" alt="Huerta 2">
            </div>

            <div class="item">
                <img src="<?php echo base_url(); ?>/assets/img/huertasegunda.jpeg" alt="Huerta 3">
            </div>

            <div class="item">
                <img src="<?php echo base_url(); ?>/assets/img/huertartercera.jpeg" alt="Huerta 4">
            </div>

            <div class="item">
                <img src="<?php echo base_url(); ?>/assets/img/otrahuerta.jpeg" alt="Huerta 5">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#imageCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#imageCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<img src="<?php echo base_url(); ?>assets/img/logo.jpeg" style="position: fixed; bottom: 20px; left: 20px; z-index: 1000; max-width: 100px;">
</div>

<style>
    .carousel-inner > .item > img {
        width: 100%;
        height: 500px; /* Adjust as needed */
        object-fit: cover;
    }
</style>

<script>
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 3000 // Changes the speed until the next slide appears
        });
    });
</script>