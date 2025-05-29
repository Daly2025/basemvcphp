<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-white p-4 rounded shadow-lg" style="max-width: 600px; width: 100%;">
        <h2 class="mb-3 text-success"><i class="fa-solid fa-seedling me-2"></i>Publicar Nuevo Intercambio</h2>
        <p class="lead">Completa el formulario para ofrecer tus semillas a la comunidad.</p>
        <form method="post" action="<?= base_url() ?>seed-exchange" enctype="multipart/form-data" class="mb-4">
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen (opcional)</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-huerta">Publicar intercambio</button>
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
<style>
body {
    background: linear-gradient(rgba(255, 255, 255, 0.35), rgba(255, 255, 255, 0.35)), url('assets/img/logopeq.jpeg.jpg') center center/cover no-repeat fixed, linear-gradient(135deg, #e0ffe0 0%, #b2f7b8 100%);
    min-height: 100vh;
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
</style>
