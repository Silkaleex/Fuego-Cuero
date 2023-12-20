# Fuego&Cuero
## La tienda de Fuego&Cuero es una tienda con productos de Rock y de Heavy Metal, podemos hacernos una cuenta donde podremos gestionar la compra de los productos que deseemos, además de guardar los productos en un carrito para comprarlo todo mas adelante.

## Esta tienda a sido creada con tecnologías PHP, con una estructura MVC(MODELO, VISTA y CONTROLADOR) Es un patrón de diseño de Software que sus siglas son MVC que se encarga de separar la lógica de negocio de la interfaz del usuario, es el responsable de separar lo que es las funciones que se muestran al usuario, su patrón de diseño es muy utilizado en la web se usa en frameworks como en el frontend con react, angular, y en el backend como PHP que ya lo implementan, facilitan mucho la gestión a la hora de desarrollar ciertas funciones además de mantener la escalabilidad  que pueda tener una aplicación de forma mucho más cómoda y sencilla.
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/1678a36b-d327-42c6-93d3-c4aac14fb0a7)
## Estructura del proyecto
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/2e68aee9-86b7-44fd-bac8-24111affc8b3)

## Fuego&Cuero Componentes:
### views: Encargada de mostrar la información al usuario de Forma Gráfica:
 ### -Productos: Solo es accesible por el administrador, aqui vemos todos los productos, Además de modificar o eliminar un producto.
 ### -Usuario: Hay un formulario para crearse una cuenta como usuario.
 ### -Producto: esta sección solo puede acceder como administrador, hay un formulario para crear un productos donde le añadiremos el nombre, descripción, cuantas hay en la tienda, una imagen.
 ### -carrito:En este componente agregaremos nuestros productos, podemos añadir mas unidades que deseemos, también podemos eliminar un producto que no queremos, o simplemente vaciamos el carrito por que nos equivocamos al añadir varios productos y por ultimo también tenemos un botón para comprar los productos que queremos.
 ### -categoria: es solo accebsible por el administrador, se añaden las categorias del producto, en mi caso son productos de ropa o accesorios, como pantalones,botas,camisetas,pegatinas...etc.
 ### -Layouts:Es la maquetacion y estructura HTML5 de la tienda con funciones a traves de php, por ejemplo un botón que me acceda a la sección de gestionar productos y cuando me acceda me diga si hay o no procductos.
 ### -pedido: esta seecion se puede verificar si nuestro pedido se ralizo con exito y cuandos pedidos hemos realizado, su producto fecha las unidades que hemos comprado a donde y a que direccion la vamos a enviar.
 ### -autoload:me gestiona los datos del controlador a la vista.
 
 ### Views
 ## carrito/index
 ### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/2d62174a-bb83-4016-a4e4-1cfae27b51d9)
 ### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/c70cd756-ee19-4860-a45a-74efaab34903)
 ### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/eac006ab-6dbc-4290-a0e4-e03bae200987)
 
## categoria/crear
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/c2aacc33-b33e-47f3-8bdf-60e60306de8b)

## categoria/index
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/45e0bec1-f641-4d47-b00d-1da82a45b392)

## categoria/ver 
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/95b6dfae-cdb0-432a-bc79-4a39cc19c7fe)

## Layouts/footer
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/117d12ae-ebb1-4750-904d-f129ff3695d2)

## Layouts/header
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/9f323f14-ab4c-4211-a1f2-6788fed1d620)

## Layouts/sidebar
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/767c5898-b604-448a-a8eb-f3558b257471)

## pedido/confirmado
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/d1e89671-0dfe-4953-8c35-42028e74b5ce)

## pedido/detalle
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/f46b86be-4cfb-4ceb-a653-098ef3b662ff)

## pedido/hacer
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/2d0dc0f9-b7ec-4f47-87ab-85bd61db3f42)

## pedido/mis_pedidos
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/988da58a-ceb8-48e4-83bd-933a4ce37be3)
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/0a24c5ee-50be-4ef0-ab07-f67cafcfd611)

## producto/crear
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/6883e41a-2e87-42b5-b3d9-efc349b6852a)

## producto/destacados
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/0cd143de-49d6-41d9-ae8c-8389d8817280)

## producto/ver
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/85c68f7a-01be-4ea2-bdde-6ab4cb52fc35)

## productos/gestion
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/0b3b44e2-2abd-439b-b1f7-50a1d85ef86f)

## usuario/registro
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/1d30d8ee-f443-41bb-b621-de797329c949)

## autoload
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/2871c152-a289-4974-bb8c-d0f81e5e6024)

## Uploads/images
### En esta carpeta guardamos las imagenes subidas de los productos

## Database
### Aqui he creado las talas con los correspondientes datos que van a ir a cada una de ellas, Usuarios, Categorias, productos, pedidos, lineas_pedidos.
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/c7827405-1982-40ff-b755-d4215576aab4)
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/41f19bd6-14d4-463b-9b53-0ebfe8b0b677)

## Config
### configuracion entre la base de datos con el servidor, por ejemplo cuando creo un producto a traves de un formulario con todos sus datos, en mi base de datos me guardara todas las caracteristicas que yo he creado en el formulario, se quedaria asi guardado en la base de datos:
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/cd904190-cff0-411b-96c2-564fb04aa67c)

## Helpers:
### Son juegos de funciones, ordenados por temática en diferentes paquetes, que nos ayudan en la realización de tareas habituales en las aplicaciones web. Existen helpers para muchas cosas distintas, como para trabajo con arrays, fechas, cookies, emails, URLs, formularios, etc.
### En mi caso lo use para cerrar sesion de usuario, para identificarse , para verificar el estado del carrito, para ver cuantos productos y precio añadidos al carrito para verificar cuantas categorias hay
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/5960e81b-92de-43f1-b5c0-36e1c56a9c4e)
### ![image](https://github.com/Silkaleex/Fuego-Cuero/assets/82760991/a45532c9-0c03-42ab-af9e-cb0d9e43d87b)

## Assets
### Aqui se guardarán los estilos CSS3 aplicados a todos los componentes, tambien tendremos otra carpeta donde esta el logo de la tienda y el fondo de la tienda

## Models
### Lógica de negocio que parte en clases y métodos que se comunican directamente con la base de datos o hacen una funcionalidad o una lógica compleja.

## Controllers
## Intermediario entre vista(views) y modelo(models), es el encargado de controlar las interacciones entre el usuario y la vista, procesa una informacion le pide los datos al modelo y devuelve nuevos datos o una vista nueva para que se le muestrarsela al usuario.
### Crea objetos llama metodos, a funciones que hacen lógica y reciben datos de formularios y enviarlos a la vista para que lo vea el usuario.
