<?php include 'app/views/partials/header.php'; ?>

<div class="container">
    <h1>Galería de Imágenes</h1>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #a8e6cf, #ffb347); /* Green and orange gradient */
            background-attachment: fixed; /* Fixed background */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }
        .container {
            background-color: #e8f5e9; /* Light green background */
            padding: 20px; /* Add some padding around the carousel */
            border-radius: 8px;
        }
        .owl-carousel .item {
            text-align: center;
            padding: 10px; /* Padding around each image */
        }
        .owl-carousel .item img {
            display: block;
            width: 100%;
            height: 300px; /* Adjust as needed */
            object-fit: cover;
            margin: 0 auto;
            border: 5px solid white; /* White border */
            box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Shadow effect */
            border-radius: 5px;
        }
        .owl-carousel .owl-stage-outer {
            padding-top: 20px; /* Space for the highlighted item */
            padding-bottom: 20px;
        }
        .owl-carousel .owl-item.active.center img {
            transform: scale(1.1); /* Highlight effect */
            transition: transform 0.3s ease;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }
star e    .owl-carousel {
            margin: 20px auto; /* Center the carousel */
            padding: 20px;
            background-color: #e8f5e9; /* Light green background */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 500px; /* Further reduced width */
        }
    </style>
    <div class="owl-carousel owl-theme">
        <div class="item"><img src="<?php echo base_url(); ?>/assets/img/huerta.jpeg" alt="Huerta 1"></div>
        <div class="item"><img src="<?php echo base_url(); ?>/assets/img/huertaprimera.jpeg" alt="Huerta 2"></div>
        <div class="item"><img src="<?php echo base_url(); ?>/assets/img/huertasegunda.jpeg" alt="Huerta 3"></div>
        <div class="item"><img src="<?php echo base_url(); ?>/assets/img/huertartercera.jpeg" alt="Huerta 4"></div>
        <div class="item"><img src="<?php echo base_url(); ?>/assets/img/otrahuerta.jpeg" alt="Huerta 5"></div>
        <div class="item"><img src="<?php echo base_url(); ?>/assets/img/bancales.jpeg" alt="Bancales"></div>
        <div class="item"><img src="<?php echo base_url(); ?>/assets/img/otrados.jpeg" alt="Otra Dos"></div>
    </div>
</div>
<img src="<?php echo base_url(); ?>assets/img/logo.jpeg" style="position: fixed; bottom: 20px; left: 20px; z-index: 1000; max-width: 100px;">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            center:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
    });
</script>
<?php include 'app/views/partials/footer.php'; ?>