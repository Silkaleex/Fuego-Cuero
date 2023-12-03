
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url?>./assets/css/styles.css" />
</head>
<body>
<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p  class="confirmacion-mensaje">
        Tu pedido ha sido guardado con exito, una vez que realices la transferencia
        bancaria a la cuenta *1234567890ABCD* con el coste del pedido, será procesado y enviado.
    </p>
    <br />
    <div id="confirmacion">
        <?php if (isset($pedido)) : ?>
            <h3 class="titulo-confirmacion">Datos del pedido:</h3>
            <p class="txt-confirmacion">-Número de pedido: <?= $pedido->id ?></p> <br />
            <p class="txt-confirmacion">-Total a pagar: <?= $pedido->coste ?> €</p> <br />
        </div>

        <h3 class="titulo-confirmacion">Productos:</h3>
    <table  class="table-detalle">
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
        </tr>
        <?php while ($producto = $productos->fetch_object()) : ?>
            <tr>
                <td>
                    <?php if ($producto->imagen != null) : ?>
                        <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
                    <?php else : ?>
                        <img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" />
                    <?php endif; ?>
                </td>
                <td>
                    <a class="producto-confirmacion" href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                </td>
                <td>
                    <?= $producto->precio ?>
                </td>
                <td>
                    <?= $producto->unidades ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

<?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete') : ?>
    <h1>Tu pedido NO ha podido procesarse</h1>
<?php endif; ?>
</body>
</html>