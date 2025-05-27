<h2>Intercambio de semillas</h2>
<p>Aquí podrás ver y publicar ofertas o demandas de semillas para intercambiar con otros usuarios de rehuerta.</p>
<a href="<?= base_url() ?>seed-exchange/create" class="btn btn-success mb-3">Publicar intercambio</a>

<?php if (!empty($data['exchanges'])): ?>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Usuario</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['exchanges'] as $exchange): ?>
                    <tr>
                        <td><?= htmlspecialchars($exchange['title']) ?></td>
                        <td><?= nl2br(htmlspecialchars($exchange['description'])) ?></td>
                        <td><?= htmlspecialchars($exchange['user_id']) ?></td>
                        <td><?= htmlspecialchars($exchange['created_at']) ?></td>
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
