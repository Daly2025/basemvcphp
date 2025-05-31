<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>rehuerta - Panel principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />
</head>

<body>
    <?php if (isset($_SESSION['register_success']) && $_SESSION['register_success']): ?>
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-4" role="alert"
        style="z-index:9999; min-width:250px;" id="register-success-alert">
        ¡Registro exitoso! Bienvenido a rehuerta.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        setTimeout(function () {
            var alert = document.getElementById('register-success-alert');
            if (alert) {
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

        <div class="row mt-5 justify-content-center text-center">
            <div class="col-md-3 mb-4">
                <div class="garden-icon">
                    <i class="fas fa-seedling fa-4x text-success"></i>
                </div>
                <h4 class="mt-3 text-success">Cultiva</h4>
            </div>
            <div class="col-md-3 mb-4">
                <div class="garden-icon">
                    <i class="fas fa-hand-holding-heart fa-4x text-success"></i>
                </div>
                <h4 class="mt-3 text-success">Comparte</h4>
            </div>
            <div class="col-md-3 mb-4">
                <div class="garden-icon">
                    <i class="fas fa-users fa-4x text-success"></i>
                </div>
                <h4 class="mt-3 text-success">Comunidad</h4>
            </div>
        </div>

        <!-- Texto integrado en Comic Sans -->
        <div class="mt-5 p-4 rounded shadow" style="background-color: #f9fff9; font-family: 'Comic Sans MS', cursive, sans-serif;">
            <h2 class="text-success mb-3 text-center">GRUPO DE DIFUSIÓN DE LA REHUERTA.</h2>
            <p><strong>ReHuertA: Plantar es un acto revolucionario</strong></p>
            <p>En un mundo dominado por el cemento, sembrar una semilla en el espacio público es un gesto de resistencia.
                ReHuertA nace de la necesidad de reconectar con la tierra, de ocupar nuestras calles con vida, con alimento,
                con verde.</p>
            <p>No invadimos, cultivamos. No destruimos, regeneramos. Porque la vía pública también es nuestra, y es hora
                de que florezca con hortalizas, hierbas y plantas comestibles que alimenten cuerpos y conciencias.</p>
            <p>Cada planta es un mensaje: se puede vivir de otra manera, más simple, más justa, más cerca de la tierra.
                ReHuertA es una invitación a tomar la iniciativa, a cuidar lo común, a transformar un rincón gris en un acto
                poético y ecológico.</p>
            <p><strong>La ReHuertA ya ha empezado.<br />
                Plantar es sanar.<br />
                Plantar es rebelarse.</strong></p>
        </div>
    </div>

    <style>
        .garden-icon {
            transition: transform 0.3s ease;
            animation: float 3s ease-in-out infinite;
        }

        .garden-icon:hover {
            transform: scale(1.1);
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .garden-icon i {
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }

        h4 {
            font-weight: 600;
        }

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+4vQp50IU2Nz/OFp4KfF5d0y7cQ+" crossorigin="anonymous">
    </script>
</body>

</html>
