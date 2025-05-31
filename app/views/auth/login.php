<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - rehuerta</title>

    <!-- CSS externos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.15)),
                        url('<?= base_url() ?>assets/img/logopeq.jpeg.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }

        .auth-box {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
            margin: 20px auto;
        }

        .btn-huerta {
            background: #4caf50;
            color: #fff;
            border-radius: 30px;
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
            margin: 0.5rem 0;
            transition: background 0.2s;
        }

        .btn-huerta:hover {
            background: #388e3c;
            color: #fff;
        }

        @media (max-width: 576px) {
            .auth-box {
                padding: 20px;
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="auth-box">
            <h2 class="mb-4 text-success text-center">
                <i class="fa-solid fa-right-to-bracket me-2"></i>Iniciar sesión
            </h2>

            <form action="<?= base_url() ?>auth/login" method="post">
                <div class="mb-3">
                    <label for="login-username" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="login-username2" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="login-password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="login-password2" name="password" required>
                </div>
                <button type="submit" class="btn btn-huerta w-100">Entrar</button>
            </form>

            <div class="text-center mt-3">
                <span>¿No tienes cuenta?</span>
                <a href="<?= base_url() ?>auth/register" class="btn btn-link text-success fw-bold">Regístrate</a>
            </div>

            <div class="d-flex justify-content-between mt-4 flex-wrap">
                <a href="javascript:history.back()" class="btn btn-outline-secondary mb-2">
                    <i class="fa-solid fa-arrow-left me-1"></i> Volver atrás
                </a>
                <a href="<?= base_url() ?>" class="btn btn-outline-success mb-2">
                    <i class="fa-solid fa-house me-1"></i> Ir a inicio
                </a>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
