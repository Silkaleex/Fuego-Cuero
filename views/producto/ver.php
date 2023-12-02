<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/styles.css" />
</head>

<body>
    <div id="ver-producto">
        <div class="image">
            <?php if (isset($product)) : ?>
                <h1><?= $product->nombre ?></h1>
                <?php if ($product->imagen != null) : ?>
                    <img class="tamaño-img" src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
                <?php else : ?>
                    <img src="<?= base_url ?>assets/img/Logotipo.jpg" alt="">
                <?php endif; ?>
        </div>
        <div class="data">
            <p class="descripcion-txt">*Detalles del producto: <?= $product->descripcion ?></p>
            <p class="precio-txt">Precio del Producto: <?= $product->precio ?>€</p>
            <a class="btn-compra" href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="btn-compra">Comprar</a>
        </div>
    <?php else : ?>
        <h1>No hay ningun producto existente con ese nombre</h1>
    <?php endif; ?>
    </div>
</body>
</html>