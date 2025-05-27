<h2>Publicar intercambio de semillas</h2>
<form method="post" action="<?= base_url() ?>seed-exchange/create">
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Publicar</button>
</form>
<div class="d-flex justify-content-between mt-4">
    <a href="javascript:history.back()" class="btn btn-outline-secondary">
        <i class="fa-solid fa-arrow-left me-1"></i> Volver atrás
    </a>
    <a href="<?= base_url() ?>" class="btn btn-outline-success">
        <i class="fa-solid fa-house me-1"></i> Ir a inicio
    </a>
</div>
