<?php
	require 'bootstrap.php';
	require "Entity/Usuarios.php";
	
	$usuario =$_POST["Usuario"];
	$contra =$_POST["Pass"];
	
	$Sesion = $entityManager -> getRepository('Entity\Usuarios') -> findBy([
		"Correo_Electronico" => $usuario,
		"Contrasena" => $contra 
	]);
	if ( count($Sesion) > 0){
		header("location:home2.php");
	}  
	else {
		header("location:Login.html");
	}
?>
