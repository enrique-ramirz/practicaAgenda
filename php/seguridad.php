<?php
session_start();
if(isset($_SESSION['usuario'])){
	echo "Usuario identificado";
}else{
	echo "Usuario no identificado";
	die();
}

?>
