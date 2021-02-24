<?php
/*

Autor: Ivan y Eloy

Fecha: 22/12/2020

Descripción: Buscador de productos
*/
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
    <link rel = "stylesheet" href="css/estilo.css"/>
    <link rel = "stylesheet" href="fontawesome/css/all.css"/>
    <script type = "text/javascript" href="fontawesome/js/all.js"></script>
    <div class = "header">
            Buscador
        </div>
    <?php include("menu2.php");?>
</head>
    <br>
    <br>
        <h3>Introduce el producto que quieras modificar/eliminar</h3>
        <br>
	<form action = "buscador.php" method = "POST">
		<input type= "text" name="busca">
		<input type="submit" name="enviar" value= "enviar">
	</form>
   <br>
    <br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br>
</body>
    <?php include '../footer.php'; ?>
</html>				