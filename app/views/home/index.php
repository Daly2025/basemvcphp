<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - BaseMVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include app_path('views/partials/header.php') ?>

    <main class="container-fluid flex-grow-1">
        <div class="hero-section bg-primary text-white py-5">
            <div class="container text-center">
                <h1 class="display-4 mb-4">¡Bienvenido a BaseMVC!</h1>
                <p class="lead mb-4">Un framework PHP moderno para tus proyectos web</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="/login" class="btn btn-light btn-lg px-4">Iniciar Sesión</a>
                    <a href="/admin" class="btn btn-outline-light btn-lg px-4">Panel Admin</a>
                </div>
            </div>
        </div>
    </main>

    <?php include app_path('views/partials/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>