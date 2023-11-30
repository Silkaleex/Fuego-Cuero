<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/styles.css" />
</head>

<body>
    <div class="category">
        <?php if (isset($categoria)) : ?>
            <h1><?= $categoria->nombre ?></h1>
            <?php if ($productos->num_rows == 0) : ?>
                <p>No hay productos para mostrar</p>
            <?php else : ?>
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
            <?php endif; ?>
        <?php else : ?>
            <h1>No hay categorias existentes</h1>
        <?php endif; ?>
    </div>
</body>

</html>