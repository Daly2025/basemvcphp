<div class="container mt-4">
    <div class="bg-white p-4 rounded shadow-sm">
        <h2 class="mb-3 text-success"><i class="fa-solid fa-edit me-2"></i>Editar Intercambio de Semillas</h2>
        <p class="lead">Modifica tu publicación de intercambio de semillas.</p>
        <?php if (isset($data['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars($data['error']) ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url() ?>seed-exchange/edit/<?= $data['exchange']['id'] ?>" enctype="multipart/form-data" class="mb-4" autocomplete="off">
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($data['exchange']['title']) ?>" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="5" required autocomplete="off"><?= htmlspecialchars($data['exchange']['description']) ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen (opcional)</label>
                <?php if (!empty($data['exchange']['image'])): ?>
                    <div class="mb-2">
                        <img src="<?= base_url() . $data['exchange']['image'] ?>" alt="Imagen actual" style="max-width:200px; border-radius:10px;">
                        <p class="text-muted">Imagen actual</p>
                    </div>
                <?php endif; ?>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                <?php if (!empty($data['exchange']['image'])): ?>
                    <input type="hidden" name="existing_image" value="<?= htmlspecialchars($data['exchange']['image']) ?>">
                <?php endif; ?>
            }
            <button type="submit" class="btn btn-huerta">Guardar Cambios</button>
            <a href="javascript:history.back()" class="btn btn-outline-secondary">Volver atrás</a>
        </form>
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