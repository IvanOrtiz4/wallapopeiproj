<!DOCTYPE html>
<html>
<head>
<?php

    //Credenciales Mysql
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'ivan');
    define('DB_PASSWORD', 'Rentable-2525');
    define('DB_NAME', 'wallapopei');
        
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	 
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $nombre_img = $_FILES['MyFile1']['name'];
    $img1=$mysqli->query("SELECT id_imagen1 FROM Producto WHERE id_imagen1 = '$nombre_img'");
    $img2=$mysqli->query("SELECT id_imagen2 FROM Producto");
    $img3=$mysqli->query("SELECT id_imagen3 FROM Producto");

?>

    Imagen 1<img src='img/$img1' width="250" length="250"/>      
    Imagen 2<img src='img/$img2' width="250" length="250"/>   
    Imagen 3<img src='img/$img3' width="250" length="250"/>   

</body>
</html>
