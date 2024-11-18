<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Vista/CSS/Estilos.css">
    <script src="../Vista/JS/jquery-3.2.1.js"></script>
    <title>Login</title>


</head>
<body id="body-login" style="background-image: url('../img/imgLogin/fondo.svg');">
    <!-- titulo -->
    <div id="titulo-login">
        <h1>Auto Sevicios Sport Willy</h>
    </div>
    <!-- Contenedor de login-->
    <div id="contenedorlogin">
    <form id="formulariologin" method="POST" action="../Vista/conexion/datologin.php">
            <!-- logo -->
            <div id="logo-login">
                <img src="../img/imgLogin/logo.jpg" alt="">
            </div>
            <div id="logintext">
                <h2>ACCESO</h2>
            </div>

            <div id="usuario-login">
                <!-- usuario -->
                <input type="text" name="usuario" placeholder="correo" required>
                <!-- contraseña -->
                <input type="password" id="pass" name="contraseña" placeholder="contraseña" required>
            </div>
            <div id="boton-login">
                <!-- Botón -->
                <input type="submit" name="ingresar" id="botonEnviar" value="Ingresar">
            </div>
                       
        <!-- modo administrador o cliente  -->
        <div class="form-container">
            <form class="checking">
                <p>Es administrador?</p>
                <label>No</label>
                <input type="checkbox" class="checkme">
                <label>Sí</label>
            </form>
        </div>
        </form>
    </div>
    <script src="../Vista/JS/modoadministrador.js"></script>
</body>

</html>