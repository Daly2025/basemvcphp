<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - rehuerta</title>
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
            margin: 2% 5% 0 auto;
            padding: 30px;
            max-width: 500px;
            transform: translate(4cm, -4cm);
        }
        .btn-huerta { background: #4caf50; color: #fff; border-radius: 30px; padding: 0.75rem 2rem; font-size: 1.1rem; margin: 0.5rem 0; transition: background 0.2s; }
        .btn-huerta:hover { background: #388e3c; color: #fff; }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="auth-box w-100">
            <h2 class="mb-4 text-success text-center"><i class="fa-solid fa-user-plus me-2"></i>Registro</h2>
            <form action="<?= base_url() ?>auth/register" method="post">
                <div class="mb-3">
                    <label for="register-username" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="register-username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="register-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="register-email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="register-firstname" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="register-firstname" name="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="register-lastname" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="register-lastname" name="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="register-password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="register-password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="register-confirm" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="register-confirm" name="confirm_password" required>
                </div>
                <button type="submit" class="btn btn-huerta w-100">Registrarse</button>
            </form>
            <div class="d-flex justify-content-between mt-4">
                <a href="javascript:history.back()" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-arrow-left me-1"></i> Volver atrás
                </a>
                <a href="<?= base_url() ?>" class="btn btn-outline-success">
                    <i class="fa-solid fa-house me-1"></i> Ir a inicio
                </a>
            </div>
        </div>
    </div>
</body>
</html>