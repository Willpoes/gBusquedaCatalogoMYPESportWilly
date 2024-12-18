<!DOCTYPE html>
<html lang="en">

<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$dimensiones = $_POST["dimensiones"];
$precio = $_POST["precio"];
$marca = $_POST["marca"];
$stock = $_POST["stock"];
$imagen = $_POST["imagen"];
$categorias = $_POST["categorias"];

$productos= array();

$productos[0] = array('id'=>$id,'nombre'=>$nombre,'dimensiones'=>$dimensiones,'precio'=>$precio,'marca'=>$marca,'stock'=>$stock,'imagen'=>$imagen,'categorias'=>$categorias);


?>


    <head>
        <title>Mantenimiento</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Estilo de iconos -->
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="../Vista/CSS/Estilos.css">
    </head>

    <body id="body-mantenimiento">
        <div>
            <!-- Encabezado -->
            <div class="wrap">
                <ul class="tabs">
                    <img src="../img/logo.jpg" class="banner">
                    <li><a href="../Vista/index.html"><span class="tab-text">Inicio</span></a></li>
                    <li><a href="../Vista/productos.php"><span class="tab-text">Productos</span></a></li>
                    <li><a href="../Vista/servicios.html"><span class="tab-text">Servicios</span></a></li>
                    <li><a href="../Vista/contacto.php"><span class="tab-text">Contáctanos</span></a></li>
                    <li><a href="../Vista/nosotros.html"><span class="tab-text">Nosotros</span></a></li>
                    <li><a href="../Vista/mantenimiento.html"><span class="tab-text">Mantenimiento</span></a></li>
                    <li><a href="../Vista/login.php"><span class="tab-text">Ingresa</span></a></li>
                </ul>
            </div>

            <!-- Cuerpo -->

            <h1 id="h1-mantenimiento">Mantenimiento</h1>

            <div class="datos-mantenimiento">

                <p class="p1-mantenimiento">Datos del producto</p>

                <form action="mantenimiento.php" method="post">

                    <table class="tabla-mantenimiento">
                        <tr>
                            <td id="td-mantenimiento">Llave SKU:</td>
                            <td id="td-mantenimiento"><input type="text" name="id" value="<?php echo $productos[0]['id']; ?>"></td>
                            <td id="td-mantenimiento" colspan="2"><input type="file" id='td-mantenimiento' name="imagen" accept="image/png, image/jpeg" value="hjo"></td>

                            <td rowspan="4" id="td-mantenimiento">
                                <img src="../img/imgListaProductos/<?php echo $productos[0]['imagen']; ?>" width="180px" height="180px">


                            </td>
                        </tr>

                        <tr>
                            <td id="td-mantenimiento">Nombre:</td>
                            <td id="td-mantenimiento"><input type="text" name="nombre" value="<?php echo $productos[0]['nombre']; ?>"></td>
                            <td id="td-mantenimiento">Dimensiones:</td>
                            <td id="td-mantenimiento"><input type="text" name="dimensiones" value="<?php echo $productos[0]['dimensiones']; ?>"></td>
                        </tr>

                        <tr>
                            <td id="td-mantenimiento">Precio:</td>
                            <td id="td-mantenimiento"><input type="text" name="precio" value="<?php echo $productos[0]['precio']; ?>"></td>
                            <td id="td-mantenimiento">Categorias:</td>
                            <td id="td-mantenimiento"><select name="categorias" id="categorias">

                       <option value="<?php echo $productos[0]['categorias']; ?>"> <?php echo $productos[0]['categorias']; ?></option> 
                      <option value="Tapa de rueda">Tapa de rueda</option>
                      <option value="Seguro de rueda">Seguro de rueda</option>
                      <option value="Goma de puerta">Goma de puerta</option>
                      <option value="Sobre Pisos">Sobre Pisos</option>
                        <option value="Forros de timon">Forros de timon</option>
                      <option value="Forros de asiento">Forros de asiento</option>
                    </select></td>
                        </tr>

                        <tr>
                            <td id="td-mantenimiento">Marca:</td>
                            <td id="td-mantenimiento"><input type="text" name="marca" value="<?php echo $productos[0]['marca']; ?>"></td>
                            <td id="td-mantenimiento">Stock Total:</td>
                            <td id="td-mantenimiento"><input type="text" name="stock" value="<?php echo $productos[0]['stock']; ?>"></td>
                        </tr>

                        <tr>
                            <td colspan="5" class="botones-mantenimiento">
                                <input type="button" name="Buscar" value="Buscar" class="bot">
                                <input type="button" name="Modifcar" value="Modificar" class="bot">
                                <input type="button" name="Eliminar" value="Eliminar" class="bot">
                                <input type="submit" name="Guardar" value="Guardar" class="bot">
                                <input type="button" name="Salir" value="Salir" class="bot">
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
    </body>

</html>