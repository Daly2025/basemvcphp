<h2>Foro de la huerta</h2>
<p>Comparte tus experiencias, dudas y fotos de tu huerta con la comunidad.</p>
<a href="<?= base_url() ?>forum/create" class="btn btn-success mb-3">Crear nuevo tema</a>

<?php if (!empty($data['topics'])): ?>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
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
                        <td><?= htmlspecialchars($topic['title']) ?></td>
                        <td><?= nl2br(htmlspecialchars($topic['content'])) ?></td>
                        <td>
                            <?php if (!empty($topic['image'])): ?>
                                <img src="<?= base_url() . $topic['image'] ?>" alt="Imagen del tema" style="max-width:100px;max-height:100px;">
                            <?php endif; ?>
                        </td>
                        <td><?= htmlspecialchars($topic['user_id']) ?></td>
                        <td><?= htmlspecialchars($topic['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <p>No hay temas publicados aún.</p>
<?php endif; ?>
