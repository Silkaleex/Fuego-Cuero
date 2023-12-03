
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url?>./assets/css/styles.css" />
</head>
<body>
<h1>Registrarte</h1>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
    <strong class="alert_green">Registro Completado Correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>
    <strong class="alert_red">Lo sentimos algo no funcionó correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('register')?>

<form action="<?= base_url ?>usuario/save" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"  />

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos"  />

    <label for="email">Email</label>
    <input type="text" name="email"  />

    <label for="password">Contraseña</label>
    <input type="text" name="password"  />

    <input type="submit" value="Registrarse" />

</form>
</body>
</html>