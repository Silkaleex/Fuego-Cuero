
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url?>./assets/css/styles.css" />
</head>
<body>
<h1>Gestion de Productos</h1>
<a href="<?= base_url ?>producto/crear" class="button button-small">
    Crear Producto
</a>

<?php if(isset($_SESSION['producto'])&&$_SESSION['producto']=='complete'):?>
    <strong class="alert_green">Producto añadido satisfactoriamente!</strong>

<?php elseif(isset($_SESSION['producto'])&&$_SESSION['producto'] !='complete'):?>
    <strong class="alert_red">Losentimos algo no funcionó correctamente</strong>
<?php endif;?>
<?php Utils::deleteSession('producto');?>

<table class="table-detalle">
    <tr>
        <th>Id:</th>
        <th>Nombre:</th>
        <th>Precio:</th>
        <th>Stock:</th>
        <th>Acciones:</th>
    </tr>
    <?php while ($pro = $productos->fetch_object()) : ?>
        <tr class="fila">
            <td> <?= $pro->id; ?></td>
            <td> <?= $pro->nombre; ?></td>
            <td> <?= $pro->precio; ?></td>
            <td> <?= $pro->stock; ?></td>
            <td>
                <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button2 button-gestion">Editar</a>
                <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button button-red">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
</body>
</html>