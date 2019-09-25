

<?php 
	
	require 'bootstrap.php';
	require "Entity/Pedidos.php";
	
	$productos = $entityManager -> getRepository(Pedidos::class)-> FindBy([]);
 ?>

<html>	
	<head>
	  	<title>www.comidasrapidas.com/disfruta </title>
	</head>
		  	
	<body bgcolor="white">

		<h1 width="150" align="center" > Lista de Pedidos </h1>
		<hr>
		<table align="center" width="1000" border="25" cellpadding="4" >
			<tr>
				<th bgcolor="red"> Pedidos </th> 
				<th bgcolor="red"> Cliente </th>	
				<?php
					foreach ($productos as  $value) {						
						echo "<tr>";
					 	echo " <td >".$value->getPedidos()."</td>";
					 	echo " <th>".$value->getCliente()."</th>";
					    echo "</tr>";

					}	

				?>
			
		</table>

	</body>
</html>
