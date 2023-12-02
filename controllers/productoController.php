<?php
ob_start();
require_once 'models/producto.php';
class productoController
{
    public function index()
    {
        $producto = new Productos();
        $productos = $producto->getRandom(6);
        
        //renderizar vista
        require_once 'views/producto/destacados.php';
    }
    public function ver(){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
    
            $producto = new Productos();
            $producto->setId($id);
    
            $product = $producto->getOne();
        }

            require_once 'views/producto/ver.php';
            
    }
    public function gestion()
    {
        Utils::isAdmin();
        $producto = new Productos();
        $productos = $producto->getAll();
        require_once 'views/productos/gestion.php';
    }
    public function crear()
    {
        Utils::isAdmin();
        require_once 'views/producto/crear.php';
    }
    public function save()
    {
        Utils::isAdmin();
        if (isset($_POST)) {  
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            //$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

            if($nombre && $descripcion && $precio && $stock && $categoria){
                $producto = new Productos();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoria_id($categoria);

                //guardar imagen
                if(isset($_FILES['imagen'])){
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetape = $file['type'];

                if($mimetape == 'image/jpg'|| $mimetape == 'image/jpeg' || $mimetape == 'image/png' || $mimetape == 'image/gif' ){
                    if (!is_dir('uploads')) {
                        mkdir('uploads', 0777);
                    }
                    if(!is_dir('uploads/images')){
                    mkdir('uploads/images', 0777, true);
                 }
                 $producto->setimagen($filename);
                 move_uploaded_file($file['tmp_name'],'uploads/images/'.$filename);   
                }
            }
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $producto->setId($id);
                $save = $producto->edit();
            }else{
                $save = $producto->save();
            }

                if($save){
                    $_SESSION['producto'] = "complete";
                }else{
                    $_SESSION['producto'] = "failed";
                }
            }else{
                $_SESSION['producto'] = "failed";
            }
        }else{
            $_SESSION['producto'] = "failed";
        }
        header('Location:'.base_url.'producto/gestion');//
    }
    public function editar(){
        Utils::isAdmin();
        if(isset($_GET['id'])){
        $id=$_GET['id'];
        $edit = true;

        $producto = new Productos();
        $producto->setId($id);

        $pro = $producto->getOne();

        require_once 'views/producto/crear.php';
        }else{
            header('Location: '.base_url.'producto/gestion');
        }
    }

    public function eliminar(){
        Utils::isAdmin();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $producto = new Productos();
            $producto->setId($id);

            $delete = $producto->delete();
            if($delete){
                $_SESSION['delete'] = 'completed';
            }else{
                $_SESSION['delete'] = 'failed';
            }
        }else{
            $_SESSION['delete'] = 'failed';
        }
        header('Location: '.base_url.'producto/gestion');
    }
}
ob_end_flush();
