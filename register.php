<?php
	require 'bootstrap.php';
	require "Entity/Usuarios.php";

	$nombre =$_POST["name"];
	$contra =$_POST["password"];

	$usuario = new Entity\Usuarios();
	$usuario-> setCorreoElectronico($nombre);
	$usuario-> setContrasena($contra);
	
	$Sesion = $entityManager -> getRepository('Entity\Usuarios') -> findBy([
		"Correo_Electronico" => $nombre
	]);
	if ( count($Sesion) == 0 &&  $nombre <> "" && $contra <> "" && $nombre <> "  " && $contra <> "  "){

			$entityManager->persist($usuario);
	        $entityManager->flush();
	        echo "Se guardo $nombre y el password en la BDD";
	}  
	else {
		header("location:register.html");
	}
	?>