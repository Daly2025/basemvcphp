<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rehuerta - Panel principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<body>
    <?php if (isset($_SESSION['register_success']) && $_SESSION['register_success']): ?>
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-4" role="alert"
        style="z-index:9999; min-width:250px;" id="register-success-alert">
        ¡Registro exitoso! Bienvenido a rehuerta.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        setTimeout(function() {
            var alert = document.getElementById('register-success-alert');
            if(alert) {
                alert.classList.remove('show');
                alert.classList.add('hide');
            }
        }, 3500);
    </script>
    <?php unset($_SESSION['register_success']); ?>
    <?php endif; ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 shadow-sm rounded">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-success" href="<?= base_url() ?>">
                <i class="fa-solid fa-seedling me-2"></i>rehuerta
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item mx-2">
                        <a class="btn btn-huerta-menu" href="<?= base_url() ?>seed-exchange">
                            <i class="fa-solid fa-seedling me-1"></i>Intercambio
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="btn btn-huerta-menu" href="<?= base_url() ?>forum">
                            <i class="fa-solid fa-comments me-1"></i>Foro
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="btn btn-huerta-menu" href="<?= base_url() ?>profile">
                            <i class="fa-solid fa-user me-1"></i>Mi perfil
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="btn btn-outline-danger btn-huerta-menu" href="<?= base_url() ?>logout">
                            <i class="fa-solid fa-right-from-bracket me-1"></i>Salir
                        </a>
                    </li>
                    <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item ms-3">
                        <span class="navbar-text fw-bold text-success d-flex align-items-center">
                            <i class="fa-solid fa-user-circle me-1"></i><?= htmlspecialchars($_SESSION['username']) ?>
                        </span>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Bienvenido a rehuerta</h1>
        <p class="lead">Tu comunidad de horticultura: comparte, aprende e intercambia semillas</p>
    </div>
    <style>
    .btn-huerta-menu {
        background: #e8f5e9;
        color: #388e3c;
        border-radius: 25px;
        font-weight: 600;
        padding: 0.5rem 1.5rem;
        margin: 0 0.2rem;
        border: 2px solid #4caf50;
        transition: background 0.2s, color 0.2s, border 0.2s;
    }

    .btn-huerta-menu:hover,
    .btn-huerta-menu:focus {
        background: #4caf50;
        color: #fff;
        border: 2px solid #388e3c;
    }
    </style>
</body>

</html>