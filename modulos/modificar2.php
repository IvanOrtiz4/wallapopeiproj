<!DOCTYPE html>
<!-- Autor: Ivan Ortiz y Eloy Boan
Data: 07/02/2021
Descripci�n: P�gina ara mostrar que el resultado final de la modficaci�n  -->
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
<br>
<br>
<?php 

/* 


error_reporting(E_ALL ^ E_NOTICE);
$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$id = $_POST['id'];





echo $desc;
echo $id;
echo $nombre;
echo "<br>";


$sql = "UPDATE Producto set Nombre_producto = '$nombre', Descripcion = '$desc' WHERE id_imagen = '$id'";

$result = mysqli_query($con, $sql);
*/



$servername = "localhost";
$username = "222435";
$password = "Rentable25";
$dbname = "222435";

$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$id = $_POST['id'];

try {
    $link = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // establecer el modo de error PDO en excepci�n
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE Producto SET Nombre_producto='$nombre', Descripcion = '$desc' WHERE id_imagen = '$id'";

    // Preparar declaraci�n
    $stmt = $link->prepare($sql);

    // ejecutar la consulta
    $stmt->execute();

    // repita un mensaje para decir que la ACTUALIZACI�N se realiz� correctamente
    echo $stmt->rowCount() . " modificaci�n correcta";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$link = null;
?>
<br>
<br>
<br>
</body>
    <?php include("../footer.php");?>
</html>