<?php 
$servidor="localhost";
$nombreBd="carrito";
$usuario="root";
$pass="";
$conexion = new mysqli($servidor,$usuario,$pass,$nombreBd);
if ($conexion -> connect_error) {
	# code...
	die("no se pudo conectar");
}
 ?>