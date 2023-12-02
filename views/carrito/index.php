<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>El carrito de la compra</h1>
    <?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) :?>
    <table>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
            <th>Eliminar</th>
        </tr>
        <?php
        foreach ($carrito as $indice => $elemento) :
            $producto = $elemento['producto'];

        ?>
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
                    <?=$elemento['unidades']?>
                </td>
                <td>
                    <div class="updown-unidades">
                    <a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="button-control">+</a>
                    <?= $elemento['unidades'] ?>
                    <a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="button-control">-</a>
                    </div>
                </td>
                <td>
                <a href="<?= base_url ?>carrito/delete&index=<?=$indice?>" class="button-eliminar">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="total-carrito">
<?php $stats = Utils::statsCarrito();?>
</div>
</br>

<?php $stats = Utils::statsCarrito(); ?>
<div class="carrito">
        <h3 class="total-carrito">Precio total: <?=$stats['total']?>€</h3>
        <a href="<?= base_url ?>carrito/delete_all" class="button-eliminar">Vaciar Carrito</a>

        <a href="<?= base_url ?>pedido/hacer" class="button-comprar">Comprar productos</a>
    </div>
    <?php else :?>
        <p>No hay productos añadidos al carrito</p>
<?php endif ;?>
</body>
</html>