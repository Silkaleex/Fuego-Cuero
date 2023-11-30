
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>El carrito de la compra</h1>
<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
    </tr>
    <?php
    foreach ($carrito as $indice => $elemento) :
        $producto = $elemento['producto'];

    ?>
        <tr>
            <td> <?php if ($producto->imagen != null) : ?>
                    <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito"/>
                <?php else : ?>
                    <img src="<?= base_url ?>assets/img/Logotipo.jpg" class="img_carrito">
                <?php endif; ?>
            </td>
            <td>
                <a id="producto-enlc" href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
            </td>
            <td>
                <?=$producto->precio?>
            </td>
            <td>
                <?=$elemento['unidades']?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<div class="total-carrito">
<?php $stats = Utils::statsCarrito();?>
<h3 class="total-carrito">Precio total: <?=$stats['total']?>€</h3>
<a href="<?=base_url?>pedido/hacer" class="button button-pedido">Comprar productos</a>
</div>
</body>
</html>