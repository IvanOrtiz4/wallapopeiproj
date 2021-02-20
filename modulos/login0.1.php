<?php
/*

Autor: Ivan y Eloy

Fecha: 22/12/2020

Descripción: Es el login de nuestra página web
*/
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
<style>
{
    font-family: arial;             
}
body{
    padding:0;
    margin:0;
}

a{
    text-decoration: none;
    color: #fff;

}
.header{
    background: #111;
    color: #fff;
    padding: 30px;
    text-align: left;
    font-size: 30px;
    font-weight: bold;
    text-transform: uppercase;
}
.menu{
    padding: 10px;
    background: #111;

}
.menu a{
    text-decoration: none;
    color:#fff;
    background:#111;
    padding:10px;
}
.menu a:hover{
    background: #000;
}
.cuerpo{
    background: #eaeaea;
    padding: 30px;
    min-height:440px;
}

.footer{
    background:#000;
    color:#aaa;
    text-align: center;
    font-size:10px;
    padding:50px;
}

.centrar_login{
    width: 40%;
    text-align: center;
    padding-top:200px;
}

.producto{
    display:inline-block;
    width:25%;
    padding:15px;
    background: rgba(0,0,0.05);
    color: #333;
    margin: 5px;
}

.img_producto{
    width: 320px;
    height: 320px;
    text-align: center;
}

.name_producto{
    padding:10px;
    color:#fff;
    background:orangered;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
}

.precio{
    color:black;
    padding: 25px;
}

.subir{
    position: relative;
    bottom: 10px;
}
</style>
<body>
    <div class = "header">
            WallapopEI
        </div>
        <div class="menu">
            <a href="../index.php">Principal</a>
            <a href="agregar_productos.php"> Agregar productos</a>
            <a href="productos.php"> Productos</a>
            <a href="login.php">Login</a>
			<a href="registro.php">Registro</a>
        </div>
        <div class = "cuerpo">
        <?php
        $enviar = $_POST['enviar'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            if(isset($enviar)){
                $host_mysql = "localhost";
                $user_mysql = "222476";
                $pass_mysql = "Rentable25";
                $db_mysql = "222476";
                $mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);
                if (mysqli_connect_error()) {
                    die('Connect Error (' . mysqli_connect_errno() . ') '
                            . mysqli_connect_error());
                }
                $q = $mysqli->query("SELECT * FROM Cliente WHERE username_cliente = '$username' AND passwd_cliente = '$password'");
                if(mysqli_num_rows($q)>0){
                        $r = mysqli_fetch_array($q);
                        $_SESSION['ID_CLIENTE'] = $r['ID'];
                        if(isset($return)){
                            alert("Pagina inicial");
                        
                        ?>
                            }
                            }
                        <?php
                        else{
                            echo "Los datos no son validos"
                        }
                    }
            }
            ?>
<script src="js/login.js"></script>
        </div>
        <?php include 'footer.php'; ?>

</body>
</html>