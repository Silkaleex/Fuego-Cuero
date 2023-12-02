<?php
session_start();
require_once 'autoload.php';
require_once './config/db.php';
require './config/parameters.php';
require_once 'helpers/utils.php';
require_once './views/layouts/header.php';
require_once './views/layouts/sidebar.php';

//conexion a la base de datos
$db = Database::connect();


function show_error()
{
	$error = new ErrorController();
	$error->index();
}

if (isset($_GET['controller'])) {
	$nombre_controlador = $_GET['controller'] . 'Controller';
}elseif(!isset($_GET['controller'])&& !isset($_GET['action'])){
	$nombre_controlador = controller_default;
}
 else {
	show_error();
	exit();
}

if (class_exists($nombre_controlador)) {
	$controlador = new $nombre_controlador();

	if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['action'])){
		$default = action_default;
		$controlador->$default();
	} else {
		show_error();
	}
} else {
	show_error();
}

require_once './views/layouts/footer.php';
?>