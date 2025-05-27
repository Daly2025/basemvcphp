<div class="container mt-4">
    <div class="bg-white p-4 rounded shadow-sm">
        <h2 class="mb-3 text-success"><i class="fa-solid fa-comments me-2"></i>Foro de la huerta</h2>
        <p class="lead">Comparte tus experiencias, dudas y fotos de tu huerta con la comunidad.</p>
        <a href="<?= base_url() ?>forum/create" class="btn btn-huerta mb-3"><i class="fa-solid fa-plus me-2"></i>Crear nuevo tema</a>

        <?php if (!empty($data['topics'])): ?>
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-success">
                        <tr>
                            <th>Título</th>
                            <th>Contenido</th>
                            <th>Imagen</th>
                            <th>Usuario</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['topics'] as $topic): ?>
                            <tr>
                                <td class="fw-bold text-success"><?= htmlspecialchars($topic['title']) ?></td>
                                <td><?= nl2br(htmlspecialchars($topic['content'])) ?></td>
                                <td>
                                    <?php if (!empty($topic['image'])): ?>
                                        <img src="<?= base_url() . $topic['image'] ?>" alt="Imagen del tema" style="max-width:100px;max-height:100px; border-radius:10px;">
                                    <?php endif; ?>
                                </td>
                                <td><span class="badge bg-success-subtle text-success-emphasis">#<?= htmlspecialchars($topic['user_id']) ?></span></td>
                                <td><?= htmlspecialchars($topic['created_at']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="text-muted">No hay temas publicados aún.</p>
        <?php endif; ?>

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
