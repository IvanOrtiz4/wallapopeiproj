<?php 

/* Autor: Eloy Boan e Ivan Ortiz
Data: 2020
Descripció: Apartado de los datos de registro de la pagina web
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
	/*if($_POST[registro] == "registro"){
		//print_r($_POST);
		$q="INSERT INTO `Cliente` (`ID_CLIENTE`, `Nombre`, `DNI`, `Telf`, `Nacimiento`, `username_cliente`, `passwd_cliente`) VALUES (NULL, '$_POST[ID_CLIENTE]', '$_POST[Nombre]', '$_POST[DNI]', '$_POST[Telf]', '$_POST[Nacimiento]', '$_POST[username_cliente]', '$_POST[passwd_cliente]' CURRENT_TIMESTAMP)";
		//print_r($q);
	}*/
	
	if(isset($_POST["registro"])){

            // Check connection
            if ($link->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            
            $sql="INSERT INTO `Cliente` (`Nombre`, `DNI`, `Telf`, `Nacimiento`, `username_cliente`, `passwd_cliente`) VALUES ('$_POST[Nombre]', '$_POST[DNI]', '$_POST[Telf]', '$_POST[Nacimiento]', '$_POST[username_cliente]', '$_POST[passwd_cliente]')";

            if (mysqli_query($link, $sql)) {
               echo "Registro ingresado correctamente";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
            }
            $link->close();
         }
?><!-- FIN Registro de usuarios y Mail de Notificación -->
<!DOCTYPE html>
<html lang="es">
  <head>
  <div class = "header">
            WallapopEI
  </div>
  <style>
  body{background-color:#b2edff;}
  </style>
  <?php include("menu.php");?>

  </head>
  <body class = "registro" style="text-align: center;">

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Registro de Clientes</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
			    <form class="well form-horizontal" method="post"  id="formulario" name="fRegistro">
					<fieldset>

					<legend><center><h2><b>Formulario de Registro</b></h2></center></legend><br>

					<div class="form-group">
					  <label class="col-md-4 control-label">Nombre</label>  
					  <div class="col-md-4 inputGroupContainer">
					  <div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					  <input  name="Nombre" id="Nombre" placeholder="Ingrese su Nombre Completo" class="form-control"  type="text">
					   </div>
					  </div>
					</div>
 
					<div class="form-group">
					  <label class="col-md-4 control-label">Telefono</label>  
					    <div class="col-md-4 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					      <input name="Telefono" id="Telefono" placeholder="Numero de telefono" class="form-control" type="text">
					    </div>
					  </div>
					</div>
 
					<!-- Dirección input-->
 
					<div class="form-group">
					  <label class="col-md-4 control-label">Fecha de nacimiento</label>  
					    <div class="col-md-4 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					  <input name="Nacimiento" id="Nacimiento" placeholder="Fecha de nacimiento" class="form-control" type="date">
					    </div>
					  </div>
					</div>
 
					<div class="form-group">
					  <label class="col-md-4 control-label">Usuario</label>  
					  <div class="col-md-4 inputGroupContainer">
					  <div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					  <input  name="username_cliente" id="username_cliente" placeholder="Usuario" class="form-control"  type="text">
					    </div>
					  </div>
					</div>
 
					<div class="form-group">
					  <label class="col-md-4 control-label">Contraseña</label> 
					    <div class="col-md-4 inputGroupContainer">
					    <div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					  <input name="passwd_cliente" id="passwd_cliente" placeholder="Contraseña" class="form-control" type="password">
					    </div>
					  </div>
					</div>

					<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

					<div class="form-group">
					  <label class="col-md-4 control-label"></label>
					  <div class="col-md-4"><br>
					   <input type="submit" class="btn btn-primary" value="registro" name="registro" id="registro">
					  </div>
					</div>

					</fieldset>
				</form>
			</div>
    </div></br>

    <?php include("footer.php");?>

    <?php include("js.php");?>
  </body>
</html>
