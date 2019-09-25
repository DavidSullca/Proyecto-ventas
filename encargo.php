<?php
	require 'bootstrap.php';
	require "Entity/Comidas.php";
	require "Entity/Pedidos.php";

	$encargar =$_POST["comida"];


	$usuario = new Entity\Pedidos();
	$usuario->  setIdComida($encargar);
	$usuario->  setIdUsuario($encargar);
	$entityManager->persist($usuario);
	$entityManager->flush();
	echo "Se encargo el pedido exitosamente siga disfrutando de la pagina"
?>