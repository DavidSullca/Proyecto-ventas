<?php 
	
	require 'bootstrap.php';
	require "Entity/Comidas.php";
	
	$productos = $entityManager -> getRepository(Comidas::class)-> FindBy([]);
 ?>

<html>	
	<head>
	  	<title>www.comidasrapidas.com/disfruta </title>
	</head>
		  	
	<body bgcolor="white">

		<h1 width="150" align="center" > Elija su pedido </h1>
		<hr>
		<table align="center" width="1000" border="25" cellpadding="4" >
			<tr>
				<th bgcolor="red"> Comidas </th> 
				<th bgcolor="red"> Precios </th>
				<th bgcolor="red"> Encargar Pedido </th>	
				<?php
					foreach ($productos as  $value) {						
						echo "<tr>";
					 	echo " <td >".$value->getComida()."</td>";
					 	echo " <th>".$value->getPrecio()."</th>";
					 	echo " <th> <input type='submit' value='Encargar'></th>";
					    echo "</tr>";

					}	

				?>
			
		</table>

	</body>
</html>