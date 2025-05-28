<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="bg-white p-4 rounded shadow-sm">
                <?php if (isset($data['error'])): ?>
                    <div class="alert alert-warning">
                        <i class="fa-solid fa-lock me-1"></i>
                        <?= $data['error'] ?>
                        <div class="mt-2">
                            <a href="<?= base_url() ?>auth/login" class="btn btn-success btn-sm me-2">Iniciar sesión</a>
                            <a href="<?= base_url() ?>auth/register" class="btn btn-outline-success btn-sm">Registrarse</a>
                        </div>
                    </div>
                <?php else: ?>
                <h2 class="mb-4 text-success"><i class="fa-solid fa-seedling me-2"></i>Crear nuevo tema en el foro</h2>
                <form method="post" action="<?= base_url() ?>forum/create" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold"><i class="fa-solid fa-leaf me-1 text-success"></i>Título del tema</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Ej: ¿Cómo germinar tomates?" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label fw-bold"><i class="fa-solid fa-seedling me-1 text-success"></i>Descripción / Pregunta</label>
                        <textarea class="form-control" id="content" name="content" rows="5" placeholder="Comparte tu experiencia, pregunta o consejo sobre horticultura..." required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold"><i class="fa-solid fa-image me-1 text-success"></i>Imagen de tu huerta (opcional)</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <div class="alert alert-info mb-0 p-2">
                            <i class="fa-solid fa-circle-info me-1"></i>
                            Los comentarios en este tema serán públicos y cualquier persona podrá participar, ¡anima a la comunidad a responder!
                        </div>
                    </div>
                    <button type="submit" class="btn btn-huerta w-100"><i class="fa-solid fa-paper-plane me-2"></i>Publicar tema</button>
                </form>
                <div class="d-flex justify-content-between mt-4">
                    <a href="javascript:history.back()" class="btn btn-outline-secondary">
                        <i class="fa-solid fa-arrow-left me-1"></i> Volver atrás
                    </a>
                    <a href="<?= base_url() ?>" class="btn btn-outline-success">
                        <i class="fa-solid fa-house me-1"></i> Ir a inicio
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<style>
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
</style>
