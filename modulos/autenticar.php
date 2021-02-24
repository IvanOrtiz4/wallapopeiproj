<?php
/*

Autor: Ivan y Eloy

Fecha: 24/02/2021

Descripción: Pagina que autentica a los usuarios
*/
?>
<HTML>
<head>
<meta charset="utf-8">
    <meta charset="utf-8"/>
    <link rel = "stylesheet" href="../css/estilo.css"/>
	<title>Registro</title>
</head>
<?php
session_start();
require_once("config.php");

//Comprovacion del usuario y contraseña
			if ( !isset($_POST['username'], $_POST['password']) )
            {
			// Could not get the data that should have been sent.
			exit('Please fill both the username and password fields!');
			}
	?>
		<div class = "header">
		    WallapopEI
		</div>
	  	<?php include 'menu3.php'; ?>
	<p> </p>
	<?php
//Consulta de SQL
if ($stmt = $link->prepare('SELECT dni, clave FROM usuarios WHERE usuario = ?'))
 {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
     
     //
     if ($stmt->num_rows > 0)
      {
		$stmt->bind_result($dni, $clave);
		$stmt->fetch();
        
			// verificamos la contrasenya del usuario         
        	//if ($_POST['password'] === $clave) 
          	if(password_verify( $_POST['password'],$clave))
        		{
                    // Si la contraseña y el usuario son correctos 
					session_regenerate_id();
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['name'] = $_POST['username'];
					$_SESSION['dni'] = $dni;
                    header('Location: perfil.php');
                   
				} 
           
       				// Si el usuario existe pero la contraseña es incorrecta muestra mensaje de contraseña incorrecta
       		
                   		else { echo "  <p> </p>   <p style=text-align:center;> <img src= '../img/logo.png' type=webp&to=min&r=640 style=width:200px;height:220px;></p>
                        <p> </p>     <table border=1 cellspacing=0 cellpading=0 align=center BORDER BGCOLOR=#>
                        <tr align=center > <td ><font color=white><h2>Contrase&#65533;a incorrecta </h2>  <a style = 'color:white' href='exit.php' >Salir</a>  </td>    </tr>
                        </table>"; }
       	}  
      
                          
      			   // Si el usuario no existe muestra un mensaje de usuario no existente
          				else { echo "  <p> </p>   <p style=text-align:center;> <img src=../img/logo.png?type=webp&to=min&r=640 style=width:200px;height:220px;></p>
                        <p> </p>     <table border=1 cellspacing=0 cellpading=0 align=center>
                        <tr align=center > <td ><font color=black><h2>Usuario incorrecto</h2>  <a style = 'color:black' href='exit.php' >Salir</a>  </td>    </tr>
                        </table>"; }

	$stmt->close();
	
}
?>
<br>
<br>
<?php include '../footer.php'; ?><?php
?>