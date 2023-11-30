<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css"/>
    <title>Tienda</title>
</head>
<body>
    <div id="container">
    <!--Cabecera-->
    <header id="header">
        <div id="logo"><img src="./assets/img/Logotipo.jpg" alt="logo"/>
        <a href="./index.php">Fuego & Cuero</a>
        </div>
    </header>
    <!--Menú-->
    <nav id="menu">
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Categoria 1</a></li>
        <li><a href="#">Categoria 2</a></li>
        <li><a href="#">Categoria 3</a></li>
        <li><a href="#">Categoria 4</a></li>
        <li><a href="#">Categoria 5</a></li>

    </ul>
    </nav>
    <div id="content">
        <!--Barra Lateral-->
        <aside id="lateral">
            <div id="login" class="block_aside">
        <form action="#" method="post">
            <label for="email">Email</label>
            <input type="email" name="email"/>
            <label for="password">Contraseña</label>
            <input type="password" name="password"/>
            <input type="submit" name="Enviar"/>
        </form>
                <div class="enlaces-lateral">
                    <a href="#">Mis pedidos</a>
                    <a href="#">Gestionar pedidos</a>
                    <a href="#">Gestionar categorias</a>
                </div>
            </div>
        </aside>
        <!--Contenido Central-->
        <div id="central">
            <div class="product">
                <img src="./assets/img/Logotipo.jpg"/>
                <h2>Camiseta negra de Slipknot</h2>
                <p>30€</p>
                <a href="">Comprar</a>
            </div>
            <div class="product">
                <img src="./assets/img/Logotipo.jpg"/>
                <h2>pantalones goticos</h2>
                <p>15€</p>
                <a href="">Comprar</a>
            </div>
            <div class="product">
                <img src="./assets/img/Logotipo.jpg"/>
                <h2>Chupa de cuero</h2>
                <p>70€</p>
                <a href="">Comprar</a>
            </div>
            <div class="product">
                <img src="./assets/img/Logotipo.jpg"/>
                <h2>Camiseta negra de Ramstein</h2>
                <p>30€</p>
                <a href="">Comprar</a>
            </div>
        </div>
    </div>
    <!--Pie de Página-->
    <footer id="footer"><p>Todos los derechos reservados, Creado por Silkaleex &copy; <?=date('Y')?></p></footer>
    </div>
</body>
</html>