<?php
$servername = "localhost";
$username = "ivan";
$password = "Rentable-2525";
$dbname = "wallapopei";
$x = $_GET['id'];
try {
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM Producto WHERE id_imagen1=$x";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Producto eliminado";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 