<div class="container mt-4">
    <div class="bg-white p-4 rounded shadow-sm">
        <?php if (isset($data['error'])): ?>
            <div class="alert alert-danger">
                <i class="fa-solid fa-exclamation-triangle me-1"></i>
                <?= $data['error'] ?>
            </div>
        <?php endif; ?>
        <?php if (!isset($_SESSION['user_id'])): ?>
            <div class="alert alert-warning">
                <i class="fa-solid fa-lock me-1"></i>
                Para publicar un intercambio de semillas debes <a href="<?= base_url() ?>auth/login" class="btn btn-link p-0">iniciar sesión</a> o <a href="<?= base_url() ?>auth/register" class="btn btn-link p-0">crear una cuenta</a>.
            </div>
        <?php else: ?>
            <div class="mb-4">
                <a href="<?= base_url() ?>seed-exchange/create" class="btn btn-huerta">
                    <i class="fa-solid fa-plus me-2"></i>Publicar nuevo intercambio
                </a>
            </div>
        <?php endif; ?>
        <hr>
        <h3 class="mb-3">Intercambios publicados</h3>
        <?php if (!empty($data['exchanges'])): ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Usuario</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['exchanges'] as $exchange): ?>
                            <tr>
                                <td><?= htmlspecialchars($exchange['title']) ?></td>
                                <td><?= nl2br(htmlspecialchars($exchange['description'])) ?></td>
                                <td><?= htmlspecialchars($exchange['user_id']) ?></td>
                                <td><?= htmlspecialchars($exchange['created_at']) ?></td>
                                <td>
                                    <a href="<?= base_url() ?>seed-exchange/verIntercambio/<?= $exchange['id'] ?>" class="btn btn-outline-success btn-sm">
                                        <i class="fa-solid fa-eye"></i> Ver y comentar
                                    </a>
                                    <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $exchange['user_id']): ?>
                                        <a href="<?= base_url() ?>seed-exchange/edit/<?= $exchange['id'] ?>" class="btn btn-outline-primary btn-sm mt-1"><i class="fa-solid fa-edit"></i> Editar</a>
                                        <a href="<?= base_url() ?>seed-exchange/delete/<?= $exchange['id'] ?>" class="btn btn-outline-danger btn-sm mt-1" onclick="return confirm('¿Estás seguro de que quieres eliminar este intercambio?');"><i class="fa-solid fa-trash"></i> Eliminar</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p>No hay intercambios publicados aún.</p>
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
body {
    background: linear-gradient(rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)), url('assets/img/logopeq.jpeg.jpg') center center/cover no-repeat fixed, linear-gradient(135deg, #e0ffe0 0%, #b2f7b8 100%);
    min-height: 100vh;
}
</style>
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
