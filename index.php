<?php
/*

Autor: Ivan y Eloy

Fecha: 22/12/2020

Descripci�n: Es el index de nuestra p�gina web
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel = "stylesheet" href="css/estilo.css"/>
    <link rel = "stylesheet" href="fontawesome/css/all.css"/>
    <script type = "text/javascript" href="fontawesome/js/all.js"></script>

    <title> WallapopEI</title>
</head>
<body>
    <div class = "header">
            WallapopEI
        </div>
        <?php include 'menu.php'; ?>
        <div class = "cuerpo" style="text-align:center;">
            <h1 style = "font-family: arial">Bienvenido a WallapopEI, productos de Segunda Mano, buena calidad</h1>
            </br></br>
            <img src="img/logo.png" alt="">
            </br></br></br></br>
            <div class="alert alert-warning">
            <p style="font-family:arial;">Para a�adir, modificar y borrar productos es necesario registrarse y logearse </p>
            </div>
        </div>
        <?php include 'footer.php'; ?>

</body>
</html>