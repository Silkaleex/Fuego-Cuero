<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url?>./assets/css/styles.css" />
</head>
<body>
    
            <!--Barra Lateral-->
            <aside id="lateral">
            <div id="carrito" class="block_aside">
                <h3>Mi Carrito</h3>
                <ul>
                    <?php $stats = Utils::statsCarrito()?>
                    <li><a href="<?=base_url?>carrito/index">Ver el Carrito</a></li>
                    <li><a href="<?=base_url?>carrito/index">Productos: <?= $stats['count']?> </a></li>
                    <li><a href="<?=base_url?>carrito/index">Total: <?=$stats['total']?>€</a></li>
                </ul>
            </div>
                <div id="login" class="block_aside">
                    <?php if(!isset($_SESSION['identity'])):?>
                    <form action="<?=base_url?>usuario/login" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" />
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />
                        <input type="submit" name="Enviar" />
                    </form>
                
                    <?php else: ?>
                       <h3><?=$_SESSION['identity']->nombre?><?=$_SESSION['identity']->apellidos?></h3> 
                    <?php endif; ?>
                    <div class="enlaces-lateral">
                        <?php if(isset($_SESSION['admin'])):?>
                        <a href="<?=base_url?>categoria/index">Gestionar Categorias</a>
                        <a href="<?=base_url?>producto/gestion">Gestionar Productos</a>
                        <a href="<?=base_url?>pedido/gestion">Gestionar Pedidos</a>     
                        <?php endif;?>
                        
                        <?php if(isset($_SESSION['identity'])):?>
                        <a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a>
                        <a href="<?=base_url?>usuario/logout">Cerrar Session</a>

                        <?php else:?>
                        <a href="<?=base_url?>usuario/registro">Registrate</a>
                        <?php endif;?>

                    
                    </div>
                </div>
            </aside>
            <!--Contenido Central-->
            <div id="central">
</body>
</html>