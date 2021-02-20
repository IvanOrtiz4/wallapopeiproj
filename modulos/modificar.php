<?php 

/* Autor: Eloy Boan e Ivan Ortiz
Data: 2020
Descripció: Apartado donde se modifican los datos del producto
*/

error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel = "stylesheet" href="css/estilo.css"/>
    <link rel = "stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel = "stylesheet" href="fontawesome/css/all.css"/>
    <script type = "text/javascript" href="bootstrap/js/bootstrap.js"></script>
    <script type = "text/javascript" href="fontawesome/js/all.js"></script>
    <script type = "text/javascript" href="js/jquery.js"></script>
    <script type = "text/javascript" href="js/app.js"></script>
    <link rel = "stylesheet" href="css/estilo.css"/>
    <link rel = "stylesheet" href="fontawesome/css/all.css"/>
    <script type = "text/javascript" href="fontawesome/js/all.js"></script>
    <title> WallapopEI</title>
</head>

<html lang="es">


<?php

$z=$_GET['id'];

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ivan');
define('DB_PASSWORD', 'Rentable-2525');
define('DB_NAME', 'wallapopei');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Mostrar datos</title>
	</head>
	<body>
		<br>
			<form action = "modificar2.php" method = "POST">		
				<?php
				$z = $_GET['id'];
				
				$sql = "select * from Producto where ID_PRODUCTO = '$z'";
				$result = mysqli_query($link, $sql);
				while($mostrar = mysqli_fetch_array($result)){

				?>

				<tr>
					<td><?php echo "ID_PRODUCTO: $mostrar[9] <input type='hidden' name = 'id' value= '$mostrar[9]'><br>"?></td>
					<td><?php echo "Nombre_Producto: <input type='text' name = 'nombre' value= '$mostrar[0]'><br>"?></td>
					<td><?php echo "Descripció: <input type='text' name = 'desc' value= $mostrar[1]><br>"?></td>
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
</html>
