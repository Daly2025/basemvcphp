<div class="container mt-4">
    <div class="bg-white p-4 rounded shadow-sm">
        <h2 class="mb-3 text-success"><i class="fa-solid fa-comments me-2"></i><?= htmlspecialchars($data['topic']['title']) ?></h2>
        <p><?= nl2br(htmlspecialchars($data['topic']['content'])) ?></p>
        <?php if (!empty($data['topic']['image'])): ?>
            <img src="<?= base_url() . $data['topic']['image'] ?>" alt="Imagen del tema" class="img-fluid rounded mb-3" style="max-width:300px;">
        <?php endif; ?>
        <div class="mb-2 text-muted">Publicado el <?= htmlspecialchars($data['topic']['created_at']) ?> por usuario #<?= htmlspecialchars($data['topic']['user_id']) ?></div>
        <hr>
        <h4 class="text-success mb-3"><i class="fa-solid fa-seedling me-2"></i>Comentarios</h4>
        <?php if ($data['comments']): ?>
            <?php foreach ($data['comments'] as $comment): ?>
                <div class="border rounded p-2 mb-2 bg-light">
                    <div class="fw-bold text-success"><i class="fa-solid fa-user me-1"></i><?= htmlspecialchars($comment['author']) ?></div>
                    <div><?= nl2br(htmlspecialchars($comment['content'])) ?></div>
                    <div class="text-end text-muted small"><?= htmlspecialchars($comment['created_at']) ?></div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-muted">Aún no hay comentarios. ¡Sé el primero en participar!</p>
        <?php endif; ?>
        <hr>
        <h5 class="mb-3">Deja tu comentario</h5>
        <form method="post">
            <div class="mb-2">
                <label for="author" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Tu nombre o apodo">
            </div>
            <div class="mb-2">
                <label for="content" class="form-label">Comentario</label>
                <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-huerta"><i class="fa-solid fa-paper-plane me-1"></i>Comentar</button>
        </form>
        <div class="d-flex justify-content-between mt-4">
            <a href="javascript:history.back()" class="btn btn-outline-secondary">
                <i class="fa-solid fa-arrow-left me-1"></i> Volver atrás
            </a>
            <a href="<?= base_url() ?>forum" class="btn btn-outline-success">
                <i class="fa-solid fa-comments me-1"></i> Volver al foro
            </a>
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
