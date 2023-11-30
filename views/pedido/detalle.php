<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Detalles del producto</h1>
    <?php if (isset($pedido)) : ?>
        <h3>Datos del Pedido:</h3>

        Numero de Pedidos: <?= $pedido->id ?> <br />
        Total a Pagar: <?= $pedido->coste ?>€ <br />>
        Productos:
        <table>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>
            </tr>
            <?php while ($producto = $productos->fetch_object()) : ?>
                <tr>
                    <td> <?php if ($producto->imagen != null) : ?>
                            <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
                        <?php else : ?>
                            <img src="<?= base_url ?>assets/img/Logotipo.jpg" class="img_carrito">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a id="producto-enlc" href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
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
</body>

</html>