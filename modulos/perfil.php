<?php
/* Autor: Eloy Boan e Ivan Ortiz
Data: 2020
Descripción: Página donde muestra el perfil del usuario
*/
// Solo se permite el ingreso con el inicio de sesion.
session_start();
// Si el usuario no se ha logueado se le regresa al inicio.
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit; }
else{
	header('Location: index2.php');
	exit; 
}
?>


<html>
<head>
<meta charset="utf-8">
<link rel = "stylesheet" href="../css/estilo.css"/>
<title></title>
</head>

<body>
<div class = "header">
		    WallapopEI
		</div>
	  	<?php include 'menu2.php'; ?>
	<p> </p>
<p style="text-align:center;"> <img src="../img/logo.png" style="width:400px;height:120px;"></p>
<table BORDER BGCOLOR="" border="2" cellpadding="15" cellspacing="2" width="400" align="center">
    
<!-- Si todo ha salido BIEN-->
<tr><td align="center">
<a><h2 style = "color: black;"> TE HAS LOGUEADO CORRECTAMENTE EN LA BASE DE DATOS DE WALLAPOPEI</h2></a>
</td></tr>
</tr>
</table>

 <!-- BIENVENIDA AL NUEVO USUARIO-->
<table border="2" cellpadding="15" cellspacing="2" width="400" align="center">
<tr><td align="center">
<h2> Bienvenido Usuario : <?=$_SESSION['name']?> <p> Dni : <?=$_SESSION['dni']?>  </p> </h2></td>
<tr><td align="center">
<a style = "color: black" href='exit.php'>SALIR</a>
</td></tr>
</tr>
</table>

</div>
<br>
<br>
	  	<?php include '../footer.php'; ?>
	<p> </p>
</body>
</html>
