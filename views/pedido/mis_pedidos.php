<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mis Pedidos</h1>
    <table>
        <tr>
            <th>Nº Pedido</th>
            <th>Coste del pedido</th>
            <th>Fecha</th>
        </tr>
        <?php
        while ($ped = $pedidos->fetch_object()) :

        ?>
            <tr>
                <td>
                    <a href="<?base_url?>pedido/detalle&id=<?=$ped->id?>"><?=$ped->id?></a>
                
                </td>
                <td>
                    <?= $ped->coste?>€
                </td>
                <td>
                    <?= $ped->fecha?>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>