<div class="container mt-4">
    <div class="bg-white p-4 rounded shadow-sm">
        <h2 class="mb-3 text-success"><i class="fa-solid fa-comments me-2"></i>Foro de la huerta</h2>
        <p class="lead">Comparte tus experiencias, dudas y fotos de tu huerta con la comunidad.</p>
        <a href="<?= isset($_SESSION['user_id']) ? base_url() . 'forum/create' : '#' ?>" class="btn btn-huerta mb-3<?php if (!isset($_SESSION['user_id'])) echo ' disabled'; ?>" tabindex="-1" aria-disabled="true">
            <i class="fa-solid fa-plus me-2"></i>Crear nuevo tema
        </a>
        <?php if (!isset($_SESSION['user_id'])): ?>
            <div class="alert alert-warning p-2 mb-3">
                <i class="fa-solid fa-lock me-1"></i> Debes iniciar sesión para crear un nuevo tema. Puedes ver y comentar en los temas existentes sin registrarte.
            </div>
        <?php endif; ?>

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
                            <th>Acciones</th>
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
                                <td>
                                    <a href="<?= base_url() ?>forum/verTema/<?= $topic['id'] ?>" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-eye"></i> Ver y comentar</a>
                                    <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $topic['user_id']): ?>
                                        <a href="<?= base_url() ?>forum/edit/<?= $topic['id'] ?>" class="btn btn-outline-primary btn-sm mt-1"><i class="fa-solid fa-edit"></i> Editar</a>
                                        <a href="<?= base_url() ?>forum/delete/<?= $topic['id'] ?>" class="btn btn-outline-danger btn-sm mt-1" onclick="return confirm('¿Estás seguro de que quieres eliminar este tema?');"><i class="fa-solid fa-trash"></i> Eliminar</a>
                                    <?php endif; ?>
                                </td>
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
<img src="<?php echo base_url(); ?>assets/img/logo.jpeg" style="position: fixed; bottom: 20px; left: 20px; z-index: 1000; max-width: 100px;">
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
