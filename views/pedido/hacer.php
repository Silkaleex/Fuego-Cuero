<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['identity'])) : ?>
        <h1>Hacer Pedido</h1>

        <p>
            <a href="<?= base_url ?>carrito/index">Productos y precio del pedido</a>
        </p>
        <br/>
        <h3>Datos personales para el envio: </h3>

        <form action="<?= base_url.'pedido/add'?>" method="POST">

        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" required/>

        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" required/>

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion"/>

        <input type="submit" value="confirmar pedido" required>
        </form>
    <?php else : ?>
        <h1>Necesitas registrarte</h1>
        <p>Necesitas estar logeado para realizar tu pedido</p>
    <?php endif; ?>
</body>

</html>