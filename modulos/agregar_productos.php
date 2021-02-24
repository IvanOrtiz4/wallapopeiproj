<?php 

/* Autor: Eloy Boan e Ivan Ortiz
Data: 2020
Descripció: Pagina para agregar productos
*/

error_reporting(E_ALL ^ E_NOTICE);
require_once('config.php'); 
?>
<?php	
	
	if(isset($_POST["enviar"])){

		if ($link->connect_error) {
			die("Connection failed: " . $link->connect_error);
		} 
		$dir_subida= 'img/';
		$id1 =  mt_rand();
		$id2 =  mt_rand();
		$id3 =  mt_rand();
		$fichero_subido1= $dir_subida. $id1;
		$fichero_subido2= $dir_subida. $id2;
		$fichero_subido3= $dir_subida. $id3;
	    
            //subir imagen 1
	    if(move_uploaded_file($_FILES['myFile1']['tmp_name'],  $fichero_subido1)) {   
			echo "El fichero es válido y se subió con éxito.";
		} 
	    else{    
			echo "¡Error! Formato no valido";
		}
	    echo '</br>';
		
		//subir imagen 2
	    if(move_uploaded_file($_FILES['myFile2']['tmp_name'],  $fichero_subido2)) {   
			echo "El fichero es válido y se subió con éxito.";
		} 
		else{    
			echo "¡Error! Formato no valido";
		}
		echo '</br>';
		
		//subir imagen 3	
		if(move_uploaded_file($_FILES['myFile3']['tmp_name'],  $fichero_subido3)) {   
			echo "El fichero es válido y se subió con éxito.";
		} 
		else{    
			echo "¡Error! Formato no valido";
		}
		echo '</br>';
		echo '<a href="agregar_productos.php"><input type="button" value="Salir"></a>';

		

		$ID_PRODUCTO = md5(uniqid(mt_rand()));
		$ID_CATEGORIA = md5(uniqid(mt_rand()));
		$Id_cliente = md5(uniqid(mt_rand()));
	        /*Consulta SQL que inserta todos los datos de cada producto*/
		$sql="INSERT INTO `Producto` (`Nombre_producto`, `Descripcion`, `Precio`, `Dimensiones`, `Peso`, `ID_PRODUCTO` , `Fecha`, `ID_Cliente`, `Categoria`, `id_imagen1`, `id_imagen2`, `id_imagen3`) VALUES ('$_POST[Nombre]', '$_POST[Desc]', '$_POST[Precio]', '$_POST[Dimensiones]', '$_POST[Peso]', '$ID_PRODUCTO', '$_POST[Fecha]' , '$Id_cliente' , '$_POST[options]', '$id1','$id2','$id3')";
			
		if (mysqli_query($link, $sql)) {
			echo "Producto agregado correctamente";
		} 
		else {
			echo "Error: " . $sql . "" . mysqli_error($link);
		}
		$link->close();
		}
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
    <link rel = "stylesheet" href="css/estilo.css"/>
    <link rel = "stylesheet" href="fontawesome/css/all.css"/>
    <script type = "text/javascript" href="fontawesome/js/all.js"></script>
    <div class = "header">
            WallapopEI
        </div>
    <?php include("menu2.php");?>
</head>
</div>
<html lang="es">
  <head>
  </head>
  <body bgcolor="#b2edff" style="text-align:center;">  
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Agregar Producto</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
			    <form class="well form-horizontal" method="post"  id="formulario" name="fRegistro" enctype="multipart/form-data">
					<fieldset>
<!--Nombre producto-->
					<div class="form-group">
					  <label class="col-md-4 control-label">Producto</label>  
					  <div class="col-md-4 inputGroupContainer">
					  <div class="input-group">
					  <span class="input-group-addon"></span>
					  <input name="Nombre" id="Nombre" placeholder="Nombre del producto" class="form-control"  type="text">
					   </div>
					  </div>
					</div>
 <!--Agregar descripcion-->
					<div class="form-group">
					  <label class="col-md-4 control-label">Descripcion</label>  
					    <div class="col-md-4 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"></span>
					      <input name="Desc" id="Desc" placeholder="Descripcion" class="form-control" type="text">
					    </div>
					  </div>
					</div>
 <!--Agregar precio-->
					<div class="form-group">
					  <label class="col-md-4 control-label">Precio</label>  
					  <div class="col-md-4 inputGroupContainer">
					  <div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					  <input  name="Precio" id="Precio" placeholder="Precio" class="form-control"  type="text">
					    </div>
					  </div>
					</div>
 <!--Agregar dimensiones-->
					<div class="form-group">
					  <label class="col-md-4 control-label">Dimensiones</label> 
					    <div class="col-md-4 inputGroupContainer">
					    <div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					  <input name="Dimensiones" id="Dimensiones" placeholder="Dimensiones" class="form-control" type="text">
					    </div>
					  </div>
					</div>
<!--Agregar peso-->
                    <div class="form-group">
					  <label class="col-md-4 control-label">Peso</label> 
					    <div class="col-md-4 inputGroupContainer">
					    <div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					  <input name="Peso" id="Peso" placeholder="Peso" class="form-control" type="text">
					    </div>
					  </div>
					</div>
		 			</br>
		 			<!--Elegir categoria-->
					<div class="form-group">
					  <label class="col-md-4 control-label">Categoria</label> 
					    <form name="selcategoria" method="post">
		 					<select name="options" method="post">
		 						<option value="Motor">Motor</option>
								<option value="Ropa">Ropa</option>
								<option value="Tecnologia">Tecnologia</option>
								<option value="Hogar">Hogar</option>
		 					</select>
						</form>
					</div>

					</br>
<!--Nombre producto-->
					<div class="form-group">
					  <label class="col-md-4 control-label">Fecha de creacion</label>  
					    <div class="col-md-4 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"></span>
					  <input name="Fecha" id="Fecha" placeholder="Fecha" class="form-control" type="date">
					    </div>
					  </div>
					</div>
					</br>
                    <!--Seleccionar la imagen-->
					Selecciona l'arxiu a pujar:
					<INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" VALUE='102400'>   
					<input type="file" name="myFile1">
					<input type="file" name="myFile2">
					<input type="file" name="myFile3">
					<div class="form-group">
					  <label class="col-md-4 control-label"></label>
						<div class="col-md-4"><br></br>
						<input type="submit" class="btn btn-primary" value="enviar" name="enviar" id="enviar">
						</div>
					</div>
					</fieldset>
					</br>
				</form>
			</div>
    </div>

    <?php include("footer.php");?>
  </body>
</html>
		