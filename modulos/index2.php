<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel = "stylesheet" href="../css/estilo.css"/>
    <link rel = "stylesheet" href="fontawesome/css/all.css"/>
    <script type = "text/javascript" href="fontawesome/js/all.js"></script>


    <title> WallapopEI</title>
</head>
<body>
	<?php
	echo '<script language="javascript">alert("Has sido logieado correctamente");</script>';
	?>
    <div class = "header">
            WallapopEI
        </div>
        <?php include 'menu2.php'; ?>
        <div class = "cuerpo">
            <h1 style = "font-family: Verdana">Ahora dispones de las siguientes funciones:</h1>
            <h2 style = "font-family: Verdana">-Agregar productos </h2>
            <h2 style = "font-family: Verdana">-Modificar y eliminar productos </h2>
        </div>
        <?php include '../footer.php'; ?>

</body>
</html>