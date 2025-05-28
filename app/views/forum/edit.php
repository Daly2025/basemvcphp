<div class="container mt-4">
    <div class="bg-white p-4 rounded shadow-sm">
        <h2 class="mb-3 text-success"><i class="fa-solid fa-edit me-2"></i>Editar Tema del Foro</h2>
        <p class="lead">Modifica tu tema del foro.</p>
        <form method="post" action="<?= base_url() ?>forum/edit/<?= $data['topic']['id'] ?>" enctype="multipart/form-data" class="mb-4">
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($data['topic']['title']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenido</label>
                <textarea class="form-control" id="content" name="content" rows="5" required><?= htmlspecialchars($data['topic']['content']) ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen (opcional)</label>
                <?php if (!empty($data['topic']['image'])): ?>
                    <div class="mb-2">
                        <img src="<?= base_url() . $data['topic']['image'] ?>" alt="Imagen actual" style="max-width:200px; border-radius:10px;">
                        <p class="text-muted">Imagen actual</p>
                    </div>
                <?php endif; ?>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-huerta">Guardar Cambios</button>
            <a href="<?= base_url() ?>forum/verTema/<?= $data['topic']['id'] ?>" class="btn btn-outline-secondary">Cancelar</a>
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