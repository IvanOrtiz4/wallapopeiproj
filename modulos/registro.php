<?php
/*

Autor: Ivan y Eloy

Fecha: 22/12/2020

Descripción: Esta página se encargará de realizar el registro de los usuarios en nuestra base de datos
*/
?>
<HTML>
<head>
    
<meta charset="utf-8">
    <meta charset="utf-8"/>
    <link rel = "stylesheet" href="../css/estilo.css"/>
	<title>Registro</title>
	<script>

        </script>

</head>
<body style="background-color: #fffff;">
	<div class = "header">
		    WallapopEI
		</div>
	  	<?php include 'menu3.php'; ?>
	<p> </p>
 
	<p style="text-align:center;"> <img src="../img/logo.png" style="width:400px;height:120px;"></p>
  
    <!-- Formulario para el Registro -->
	<h1 align="center">REGISTRO</h1>
	<table border="" width="400" align="center" bgcolor="">
		<tbody>
			<tr>
				<td align="center">
					<form method="post"  name="signup-form">
						<p><strong>Dni: <input name="dni" placeholder="DNI" type = "text" minlength= "2" maxlength = "8" /></strong></p>
						<p><strong>Usuario:  <input maxlength="10" name="usuario" type="text" value="" placeholder="USUARIO" /></strong></p>
						<p><strong>Contraseña:       <input maxlength="8" name="password" type="password" value="" placeholder="PASSWORD" /></strong></p>
						
						<p><strong>Teléfono: <input type="tel" name="telefono" placeholder="(Código de área) Número"></strong></p>
						<p><button name="submit" onclick="enviarFormulario()" type="submit"><strong>REGISTRAR</strong> </button></p>
					</form>
					
				</td>
			</tr>
		</tbody>
	</table>
	<table border="" width="400"  align="center">
		<tbody>
			<tr bgcolor="#FFD700">
				<td align="center"><a href="exit.php">SALIR</a></td>
			</tr>
		</tbody>
	</table>
	<br>
	<br>
	
	<?php include '../footer.php'; ?>
</HTML>
<?php
require_once("config.php");
	   //Enviar datos DNI USUARIO CALVE a la Base de Datos para registrarlo
		if ($stmt = $link->prepare("INSERT INTO usuarios (dni, usuario, clave) VALUES (?, ?, ?)"))
		{
		      $dni = $_POST['dni']; //Almacenar DNI
		      $usuario = $_POST['usuario'];//Almacenar USUARIO
			    $password = $_POST['password'];//Almacenar PASSWORD
			    $options = array("cost"=>4);
			    $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
			    
		      $stmt->bind_param("iss", $dni, $usuario, $hashPassword);
			    $stmt->execute();
		  
		 if (!$stmt->error){
		   //Cuando todo haya salido correcto saldrá este mensaje
			 echo "<table border=1 cellspacing=0 cellpading=0 align=center BORDER BGCOLOR=#141318>
			 <p><tr align=center > <td><font color=yellow ><div style=font-size:1.25em color:yellow> USUARIO REGISTRADO </div></td></tr></p>
			      </table>"; 
		   }
}

?>