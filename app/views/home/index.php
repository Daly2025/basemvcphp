<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rehuerta - Comunidad de Horticultura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <style>
        body {
            background: url('assets/img/logo.jpeg') center center/cover no-repeat fixed, linear-gradient(135deg, #e0ffe0 0%, #b2f7b8 100%);
            min-height: 100vh;
        }
        .hero {
            background: rgba(255,255,255,0.5);
            border-radius: 20px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 3rem 2rem;
            margin-top: 3rem;
            text-align: center;
        }
        .iconos-huerta {
            font-size: 2.5rem;
            color: #4caf50;
            margin: 0 1rem;
        }
        .btn-huerta {
            background: #4caf50;
            color: #fff;
            border-radius: 30px;
            padding: 0.75rem 2rem;
            font-size: 1.2rem;
            margin: 0.5rem;
            transition: background 0.2s;
        }
        .btn-huerta:hover {
            background: #388e3c;
        }
        .auth-section {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            margin-top: 2rem;
            padding: 2rem 1rem;
        }
        .auth-section h2 {
            color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero">
            <div class="mb-4">
                <i class="fa-solid fa-seedling iconos-huerta"></i>
                <i class="fa-solid fa-carrot iconos-huerta"></i>
                <i class="fa-solid fa-apple-whole iconos-huerta"></i>
                <i class="fa-solid fa-tractor iconos-huerta"></i>
                <i class="fa-solid fa-water iconos-huerta"></i>
            </div>
            <div>
                <a href="<?= base_url() ?>seed-exchange" class="btn btn-huerta"><i class="fa-solid fa-seedling me-2"></i>Intercambio de semillas</a>
                <a href="<?= base_url() ?>forum" class="btn btn-huerta"><i class="fa-solid fa-comments me-2"></i>Foro de la huerta</a>
                <a href="<?php echo base_url(); ?>gallery" class="btn btn-success btn-lg"><i class="fas fa-camera"></i> Galería de imágenes</a>
            </div>
            <h1 class="display-4 fw-bold mb-3">Bienvenido a <span style="color:#388e3c">rehuerta</span></h1>
            <p class="lead mb-4">La comunidad donde los amantes de la horticultura comparten, aprenden e intercambian semillas y experiencias.</p>
        </div>
    </div>
</body>
</html>