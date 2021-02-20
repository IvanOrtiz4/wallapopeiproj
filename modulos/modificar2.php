<?php 

/* Autor: Eloy Boan e Ivan Ortiz
Data: 2020
Descripció: Apartado donde se modifican los datos del producto
*/

$z=$_GET['ID_PRODUCTO'];

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ivan');
define('DB_PASSWORD', 'Rentable-2525');
define('DB_NAME', 'wallapopei');
 

$id = $_post['id'];
$nomprod= $_post['nomprod'];
$desc = $_post['desc'];
$precio = $_post['precio'];
$dim = $_post['dim'];
$peso = $_post['peso'];

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$sql = "UPDATE Producto SET Nombre_producto='$nomprod', Descripcion='$desc', Precio='$precio', Dimensiones='$dim', Peso='$peso'";
$result = mysqli_query($link,$sql);
?>