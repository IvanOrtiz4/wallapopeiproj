<?php 

/* Autor: Ivan Ortiz y Eloy Boan
Data: 07/02/2021
Descripci&#65533;: P&#65533;gina para modificar
*/

error_reporting(E_ALL ^ E_NOTICE);


$con = mysqli_connect('localhost', '222435', 'Rentable25', '222435');


?>

<!-- Mostrar producto de forma Simple -->
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
    <link rel = "stylesheet" href="css/estilo.css"/>
    <link rel = "stylesheet" href="fontawesome/css/all.css"/>
    <script type = "text/javascript" href="fontawesome/js/all.js"></script>
    <title> Modificar </title>
    <div class = "header">
            WALLAPOPEI
        </div>
    <?php include("menu2.php");?>
</head>
	<body>
		<br>
			<form action = "modificar2.php" method = "POST">		
				<?php
				$z = $_GET['id'];
				/*Consulta sql de seleccion de productos*/
				$sql = "select * from Producto where ID_PRODUCTO = '$z'";
				$result = mysqli_query($con, $sql);
				while($mostrar = mysqli_fetch_array($result)){
				/*Formulario para modificar nombre y descripcion */
				?>

				<tr>
					<td><?php echo "ID_PRODUCTO: $mostrar[9] <input type='hidden' name = 'id' value= '$mostrar[9]'><br>"?></td>
					<td><?php echo "Nombre_Producto: <input type='text' name = 'nombre' value= '$mostrar[0]'><br>"?></td>
					<td><?php echo "Descripci&#65533;: <input type='text' name = 'desc' value= $mostrar[1]><br>"?></td>
					<td></td>
					<?php

						
					?>
				</tr>
			<?php
			}
			?>

			<input type= "submit" value="modificar">
			</form>

	</body>
        <br>
        <br>
         <?php include("../footer.php");?>
</html>
