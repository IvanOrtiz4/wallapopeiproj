<?php 

/* Autor: Ivan Ortiz y Eloy Boan
Data: 07/02/2021
Descripció: Página para mostrar los productos
*/

error_reporting(E_ALL ^ E_NOTICE);

$con = mysqli_connect('localhost', 'ivan', 'Rentable-2525', 'wallapopei');


?>

<!-- Mostrar producto de forma Simple -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Mostrar datos</title>
	</head>
	<body>
		<br>
			<table>
				<tr>
					<td>ID_PRODUCTO</td>

				</tr>

				<?php
				$x = strtolower($_POST['busca']);
				$sql = "select * from Producto where lower(Nombre_producto) LIKE '%$x%'";
				$result = mysqli_query($con, $sql);

				while($mostrar = mysqli_fetch_array($result)){

				?>

				<tr>
					<td><?php echo $mostrar['Nombre_producto'] . " <a href='modificar.php?id=$mostrar[9] '> Modificar</a> <a href='eliminar.php?id=$mostrar[9] '> Borrar</a>" . "<br>";?></td>
					<?php

						
					?>
				</tr>
			<?php
			}
			?>

			</table>

	</body>
</html>