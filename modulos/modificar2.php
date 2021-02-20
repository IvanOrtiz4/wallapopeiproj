<?php 

/* Autor: Ivan Ortiz y Eloy Boan
Data: 07/02/2021
Descripció: Página para mostrar los productos


error_reporting(E_ALL ^ E_NOTICE);
$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$id = $_POST['id'];


$con = mysqli_connect('localhost', 'ubuntu', 'ubuntu', 'wallapopei');


echo $desc;
echo $id;
echo $nombre;
echo "<br>";


$sql = "UPDATE Producto set Nombre_producto = '$nombre', Descripcion = '$desc' WHERE id_imagen = '$id'";

$result = mysqli_query($con, $sql);
*/



$servername = "localhost";
$username = "ubuntu";
$password = "ubuntu";
$dbname = "wallapopei";

$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$id = $_POST['id'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE Producto SET Nombre_producto='$nombre', Descripcion = '$desc' WHERE id_imagen = '$id'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
