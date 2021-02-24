/* Autor: Eloy Boan e Ivan Ortiz
Data: 2020
Descripció: Pagina para eliminar productos
*/
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
    <link rel = "stylesheet" href="css/estilo.css"/>
    <link rel = "stylesheet" href="fontawesome/css/all.css"/>
    <script type = "text/javascript" href="fontawesome/js/all.js"></script>
    <title> Eliminar </title>
    <div class = "header">
            WALLAPOPEI
        </div>
    <?php include("menu2.php");?>
</head>
<body bgcolor="#b2edff">
<?php
$servername = "localhost";
$username = "222476";
$password = "Rentable25";
$dbname = "222476";
$x = $_GET['id'];
try {
// Conexion PDO a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // atributos de la conexion
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // consulta sql para eliminar un producto
    $sql = "DELETE FROM Producto WHERE ID_PRODUCTO=$x";

    // ejecutar la consulta
    $conn->exec($sql);
    echo "Producto eliminado";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 
</body>
    <?php include("../footer.php");?>
</html>