
<?php
/*

Autor: Ivan y Eloy

Fecha: 22/12/2020

Descripción: Salir a la pagina de login
*/
session_start();
session_destroy();
// Redirigir a la pagina de login:
header('Location: login.php');
?>
