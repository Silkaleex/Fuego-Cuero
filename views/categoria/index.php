<h1>Gestión de Categorias</h1>
<a href="<?= base_url ?>categoria/crear" class="button button-small">Crear Categoria</a>
<table class="table-detalle">
    <tr>
        <th>Id:</th>
        <th>Nombre:</th>
    </tr>
    <?php while ($cat = $categorias->fetch_object()) : ?>
        <tr>
            <td> <?= $cat->id; ?></td>
            <td> <?= $cat->nombre; ?></td>
        </tr>
    <?php endwhile; ?>
</table>