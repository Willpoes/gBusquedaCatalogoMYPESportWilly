<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="../Vista/CSS/Estilos.css">
</head>

<body id="body-contacto">
    <!-- Encabezado -->
    <div class="wrap">
        <ul class="tabs">
            <img src="../img/logo.jpg" class="banner">
            <li><a href="../Vista/index.html"><span class="tab-text">Inicio</span></a></li>
            <li><a href="../Vista/productos.php"><span class="tab-text">Productos</span></a></li>
            <li><a href="../Vista/servicios.html"><span class="tab-text">Servicios</span></a></li>
            <li><a href="../Vista/contacto.php"><span class="tab-text">Contáctanos</span></a></li>
            <li><a href="../Vista/nosotros.html"><span class="tab-text">Nosotros</span></a></li>
            <!-- <li><a href="../Vista/mantenimiento.html"><span class="tab-text">Mantenimiento</span></a></li> -->
            <li><a href="../Vista/login.php"><span class="tab-text">Ingresa</span></a></li>
        </ul>
    </div>

    <section class="contacto">
        <p class="cuadro1-contacto" id="texto-contacto">
            "Nunca empieces un negocio solo para <strong>hacer dinero,</strong><br> empieza un negocio para hacer una <strong>diferencia</strong>.
            <br><strong><em>...Marie Forleo"</em></strong><br>
            <img id="foto-contacto" src="../img/imgContacto/foto.jpg" alt="">
        </p>
        <iframe class="cuadro1-contacto" id="mapa-contacto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d676.6071959727998!2d-71.51690236685495!3d-16.401026306535165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b24ae927011%3A0x775291b9f3d3dfb7!2sSport%20Willy!5e0!3m2!1ses-419!2spe!4v1652076842412!5m2!1ses-419!2spe"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contacto">

        <article class="cuadro2-contacto" id="formularioContacto">
            <form method="post">
                <label for="name">Nombre: </label><br>
                <input type="name" name="nombre" placeholder="nombre" required>
                <br>
                <label for="">Correo: </label><br>
                <input type="email" name="correo" placeholder="nombre@gmail.com" required>
                <br>
                <label for="">Teléfonos: </label><br>
                <input type="tel" name="telefono" placeholder="000000000" required maxlength="9">
                <br>
                <label for="">Mensaje: </label><br>
                <textarea name="mensaje" rows="10" cols="40">Escriba aquí su mensaje</textarea>
                <br>
                <input type="submit" name="register" class="botonenviar">
            </form>
            <?php
            include("./conexion/datocontacto.php")
            ?>

        </article>
        <article class="cuadro2-contacto" id="datoscontacto">
            <h1>Contáctanos</h1>
            <p>
                <strong>Direccion:</strong><br> Cal. Raymondi 123, Urb. Manuel Prado, Paucarpata - Arequipa <br> Centro Comercial Mall d el Sur - San Juan de Miraflores <br> Centro Comercial Plaza Lima Sur - Chorrillos<br><br>

                <strong>Teléfono:</strong><br> 054-522960 <br> 958-951077 <br> 979-234771 <br><br>

                <strong>Correo Electronico:</strong><br> autoSportWillyAQP@gmail.com
            </p>
        </article>
    </section>
</body>

</html>