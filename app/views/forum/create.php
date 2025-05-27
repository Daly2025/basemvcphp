<h2>Crear nuevo tema en el foro</h2>
<form method="post" action="<?= base_url() ?>forum/create" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Contenido</label>
        <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Imagen (opcional)</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Publicar tema</button>
</form>
