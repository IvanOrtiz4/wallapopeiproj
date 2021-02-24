<?php 

/* Autor: Ivan Ortiz y Eloy Boan
Data: 07/02/2021
Descripció: Página para buscar los productos
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
    <div class = "header">
            WALLAPOPEI
        </div>
    <?php include("menu2.php");?>
</head>
	<body style="background-color:powderblue;">
        <br>
		<br>
			<table border="1">
				<tr>
					<td>ID_PRODUCTO</td>

				</tr>

				<?php
                                /*Muestra los productos que se han buscado y da la opcion de modificar o borrar*/
				$x = strtolower($_POST['busca']);
                                /*Consulta SQL que selecciona los archivos*/
				$sql = "select * from Producto where lower(Nombre_producto) LIKE '%$x%'";
				$result = mysqli_query($con, $sql);

				while($mostrar = mysqli_fetch_array($result)){

				?>

				<tr>
                                        <!--Mostrar productos-->
					<td><?php echo $mostrar['Nombre_producto'] . " <a href='modificar.php?id=$mostrar[5] '> Modificar</a>". " <a href='eliminar.php?id=$mostrar[9] '> Eliminar</a>"  . "<br>";?></td>
					<?php

						
					?>
				</tr>
			<?php
			}
			?>

			</table>

	</body>
        <br>
		<br>
	    <?php include '../footer.php'; ?>
</html>		