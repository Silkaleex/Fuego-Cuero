<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url?>./assets/css/styles.css" />
</head>

<body>
    <div class="destacados">
        <h1>Algunos productos de nuestra tienda</h1>
        <?php while ($product = $productos->fetch_object()) : ?>
            <div class="product">
                <a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
                    <?php if ($product->imagen != null) : ?>
                        <img class="tamaño-img" src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
                    <?php else : ?>
                        <img src="<?= base_url ?>assets/img/Logotipo.jpg" alt="">
                    <?php endif; ?>
                    <h2><?= $product->nombre ?></h2>
                </a>
                <p><?= $product->precio ?>€</p>
                <a href="<?=base_url?>carrito/add&id=<?=$product->id?>">Comprar</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>