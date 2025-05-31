<?php include_once __DIR__ . '/../partials/header.php'; ?>

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
            height: 300px; /* Altura base para las imágenes */
            object-fit: cover;
            margin: 0 auto;
            border: 5px solid white; /* White border */
            box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Shadow effect */
            border-radius: 5px;
        }
        .owl-carousel .owl-stage-outer {
            padding-top: 20px; /* Espacio para el item destacado */
            padding-bottom: 20px;
        }
        .owl-carousel .owl-item.active.center img {
            transform: scale(1.2); /* Efecto de zoom para el item central */
            height: 350px; /* Mayor altura para el item central */
            transition: transform 0.3s ease, height 0.3s ease;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }
        .owl-carousel {
            margin: 20px auto; /* Centrar el carrusel */
            padding: 10px; /* Reducir el padding para pantallas pequeñas */
            background-color: #e8f5e9; /* Fondo verde claro */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 100%; /* Asegurar que el carrusel ocupe el 100% del ancho disponible */
            box-sizing: border-box; /* Incluir padding y border en el ancho total */
        }
        /* Estilos para las flechas de navegación */
        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.7) !important;
            border: none !important;
            font-size: 2em !important;
            padding: 0 10px !important; /* Reducir padding de las flechas */
            height: 40px; /* Reducir altura de las flechas */
            line-height: 40px;
            color: #333 !important;
            border-radius: 50% !important;
            cursor: pointer;
            transition: background 0.3s ease;
            z-index: 10; /* Asegurar que las flechas estén por encima de las imágenes */
        }
        .owl-nav button:hover {
            background: rgba(255, 255, 255, 0.9) !important;
        }
        .owl-nav .owl-prev {
            left: 5px; /* Ajustar posición para que estén dentro del carrusel */
        }
        .owl-nav .owl-next {
            right: 5px; /* Ajustar posición para que estén dentro del carrusel */
        }
        /* Estilos para los puntos de navegación */
        .owl-dots {
            text-align: center;
            margin-top: 10px;
        }
        .owl-dots .owl-dot span {
            width: 12px;
            height: 12px;
            margin: 5px 7px;
            background: #D6D6D6; /* Color de los puntos inactivos */
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity .2s ease;
            border-radius: 30px;
        }
        .owl-dots .owl-dot.active span {
            background: #869791; /* Color de los puntos activos */
        }
        /* Estilos específicos para el menú en la galería */
        .navbar.navbar-dark.bg-dark {
            background-color: white !important;
        }
        .navbar.navbar-dark.bg-dark .navbar-brand,
        .navbar.navbar-dark.bg-dark .nav-link {
            color: black !important;
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
            dots:true, /* Asegurarse de que los puntos estén habilitados */
            center:true, /* Centrar el item activo */
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3 /* Mostrar 3 items en pantallas medianas */
                },
                1000:{
                    items:5 /* Mostrar 5 items en pantallas grandes */
                }
            }
        });
    });
</script>
<?php include_once __DIR__ . '/../partials/footer.php' ?>
