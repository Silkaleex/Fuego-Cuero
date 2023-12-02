
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == "complete") : ?>
    <h1>Compra Realizada Exitosamente!</h1>
    <p>
        Tu pedido ha sido guardado con exito!, una vez realizada la trasferencia bancaria con el coste del pedido , será procesado y enviado al destinatario del pedido
    </p>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != "complete") : ?>
    <h1>Lo sentimos hubo algun Error al procesar tu pedido</h1>
    <p>
        Tu pedido no se a podido guardar, vuelvelo a intentar mas tarde.
    </p>
<?php endif; ?>
</body>
</html>