<?php
/* Autor: Eloy Boan e Ivan Ortiz
Data: 2020
Descripció: Pagina para mostrar productos
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ivan');
define('DB_PASSWORD', 'Rentable-2525');
define('DB_NAME', 'wallapopei');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/*Orden SQL */

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

    <title> WallapopEI</title>
</head>
<body bgcolor="#b2edff">
    <div class = "header">
            WallapopEI
        </div>
        <?php include("menu.php");?>
<html lang="es">

<?php

$nombre=strtolower($_POST['buscanom']);
$descripcion=strtolower($_POST['buscadescr']);
$categoria=strtolower($_POST['options']);

/*Ordenar por precio ascendente*/
if (isset($_POST["precioasc"])){
    $mostrar="SELECT * FROM Producto ORDER BY Precio ASC";
    $datos = $link->query($mostrar);
}
/*Ordenar por precio descendente*/
else if (isset($_POST["preciodesc"])){
    $mostrar="SELECT * FROM Producto ORDER BY Precio DESC";
    $datos = $link->query($mostrar);
}
/*Ordenar por fecha ascendente*/
else if (isset($_POST["fechasc"])){
    $mostrar="SELECT * FROM Producto ORDER BY Fecha ASC";
    $datos = $link->query($mostrar);
}
/*Ordenar por fecha descendente*/
else if (isset($_POST["precioasc"])){
    $mostrar="SELECT * FROM Producto ORDER BY Precio ASC";
    $datos = $link->query($mostrar);
}
/*Mostrar por nombre*/
else if (isset($_POST["enviarnom"])){
    $mostrar="SELECT * FROM Producto where lower(Nombre_producto) LIKE '%$nombre%'";
    $datos = $link->query($mostrar);
}
/*Mostrar por descripcion */
else if (isset($_POST["options"])){
    $mostrar="SELECT * FROM Producto where lower(Categoria) LIKE '%$categoria%'";
    $datos = $link->query($mostrar);
}

/*Seleccionar por categoria */

else if (isset($_POST["enviarnom"])){
    $mostrar="SELECT * FROM Producto where lower(Nombre_producto) LIKE '%$nombre%'";
    $datos = $link->query($mostrar);
}

else if (isset($_POST["rangoprecio1"])){
    $mostrar="SELECT * FROM Producto where Precio BETWEEN 0 AND 50";
    $datos = $link->query($mostrar);
}

else if (isset($_POST["rangoprecio2"])){
    $mostrar="SELECT * FROM Producto where Precio BETWEEN 50 AND 150";
    $datos = $link->query($mostrar);
}

else if (isset($_POST["rangoprecio3"])){
    $mostrar="SELECT * FROM Producto where Precio BETWEEN 150 AND 350";
    $datos = $link->query($mostrar);
}

else if (isset($_POST["rangoprecio4"])){
    $mostrar="SELECT * FROM Producto where Precio BETWEEN 350 AND 500";
    $datos = $link->query($mostrar);
}

else if (isset($_POST["rangoprecio5"])){
    $mostrar="SELECT * FROM Producto where Precio BETWEEN 500 AND 1000";
    $datos = $link->query($mostrar);
}

else if (isset($_POST["rangoprecio6"])){
    $mostrar="SELECT * FROM Producto where Precio > 1000";
    $datos = $link->query($mostrar);
}

else{
    $mostrar="SELECT * FROM Producto";
    $datos = $link->query($mostrar);
}



?>

<div>
    <h2 align="center">Productos disponibles</h2>
    <section>
    </br>

    <form action="productos.php" method="post">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" placeholder="Buscar Nombre" name="buscanom">
        <input type="submit" value="Enviar" name="enviarnom">

        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Buscar Descripcion" name="buscadescr">
        <input type="submit" value="Enviar" name="enviardescr">

    </form>

    </br>

    &nbsp;&nbsp;&nbsp;&nbsp;<label class="col-md-4 control-label">Categoria</label> 
    <form name="selcategoria" method="post" >
            &nbsp;&nbsp;&nbsp;&nbsp;<select name="options" method="post">
                <option value="Motor">Motor</option>
                <option value="Ropa">Ropa</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Hogar">Hogar</option>
            </select>
            <input type="submit" name="enviar" value="enviar">
        </form>
    </br>

    <form style="text-align:center;" action="productos.php" method="post">
        <input style="background-color:black; color:white;" type="submit" name="precioasc" value="Precio ascendente">
        <input style="background-color:black; color:white;" type="submit" name="preciodesc" value="Precio descendente">
        <input style="background-color:black; color:white;" type="submit" name="fechasc" value="Fecha ascendente">
        <input style="background-color:black; color:white;" type="submit" name="fechadesc" value="Fecha descendente">
        </br>
        </br>
        <input style="background-color:black; color:white;" type="submit" name="rangoprecio1" value="0€ - 50€">
        <input style="background-color:black; color:white;" type="submit" name="rangoprecio2" value="50€ - 150€">
        <input style="background-color:black; color:white;" type="submit" name="rangoprecio3" value="150€ - 350€">
        <input style="background-color:black; color:white;" type="submit" name="rangoprecio4" value="350€ - 500€">
        <input style="background-color:black; color:white;" type="submit" name="rangoprecio5" value="500€ - 1000€">
        <input style="background-color:black; color:white;" type="submit" name="rangoprecio6" value="1000€ >">
    </form>
</div>

</br></br>
    <table align="center" border="1" style="border-collapse:collapse;background-color:white;">
            <tr>
                <th>Nombre Producto</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Dimensiones</th>
                <th>Fecha</th>
                <th>Categoria</th>
                <th>Imagen 1</th>
                <th>Imagen 2</th>
                <th>Imagen 3</th>
                <th>Modificar</th>
            </tr>
            <?php
            /**/
            while($mostrarprod = $datos->fetch_array(MYSQLI_BOTH)){
                echo'<tr>
                    <td>'.$mostrarprod['Nombre_producto'].'</td>
                    <td>'.$mostrarprod['Descripcion'].'</td>
                    <td>'.$mostrarprod['Precio'].'</td>
                    <td>'.$mostrarprod['Dimensiones'].'</td>
                    <td>'.$mostrarprod['Fecha'].'</td>
                    <td>'.$mostrarprod['Categoria'].'</td>
                    <td><img src="img/'.$mostrarprod["id_imagen1"].'" width="200" height="150"></td>
                    <td><img src="img/'.$mostrarprod["id_imagen2"].'" width="200" height="150"></td>
                    <td><img src="img/'.$mostrarprod["id_imagen3"].'" width="200" height="150"></td>
                    </tr>';
            }
            ?>
        </table></br></br>
</div>
    
    </section>
</div>  
</body>
</html>
	



<?php
/*
$consulta = "SELECT * FROM Producto";
mysqli_select_db("wallapopei");
$datos = mysqli_query($consulta);



while ($fila=mysqli_fetch_array($datos)){
    echo"<p>";
    echo $fila ["Nombre_producto"];
    echo"-";
    echo $fila ["Descripcion"];
    echo"-";
    echo $fila ["Precio"];
    echo"-";
    echo $fila ["Dimensiones"];
    echo"-";
    echo $fila ["Fecha"];
}
*/
include("footer.php");
?>