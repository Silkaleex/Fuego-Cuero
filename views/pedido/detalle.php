<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1>Detalle del pedido</h1>

<div class="caja-detalle">
<h2 class="titulo-detalle">Dirección de envio</h2><br/>
<h3 class="texto-detalle">* Provincia:<?= $pedido->provincia ?></h3><br/>
<h3 class="texto-detalle">* Cuidad: <?= $pedido->localidad ?></h3><br/>
<h3 class="texto-detalle">* Direccion:<?= $pedido->direccion ?></h3><br/>
</div>

<div class="caja-detalle">
<h2 class="titulo-detalle">Datos del pedido:</h2><br/>
<h3 class="texto-detalle">* Número de pedido: <?= $pedido->id ?></h3><br/>
<h3 class="texto-detalle">* Total a pagar: <?= $pedido->coste ?> €</h3><br/>
<h2 class="titulo-detalle">Productos:</h2>
</div>
<table>
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
				<a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
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
</body>
</html>