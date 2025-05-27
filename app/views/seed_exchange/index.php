<?php
session_start();
?>
<div class="container mt-4">
    <div class="bg-white p-4 rounded shadow-sm">
        <?php if (isset($_SESSION['user_id'])): ?>
            <h2 class="mb-3 text-success"><i class="fa-solid fa-seedling me-2"></i>Intercambia tus Semillas</h2>
            <p class="lead">Publica tus semillas para intercambiar con la comunidad de rehuerta.</p>
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
        <?php else: ?>
            <div class="alert alert-warning">
                <i class="fa-solid fa-lock me-1"></i>
                Para acceder al intercambio de semillas debes <a href="<?= base_url() ?>auth/login" class="btn btn-link p-0">iniciar sesión</a> o <a href="<?= base_url() ?>auth/register" class="btn btn-link p-0">crear una cuenta</a>.
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
