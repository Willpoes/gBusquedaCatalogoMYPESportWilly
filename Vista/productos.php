<!DOCTYPE html>
<html lang="en">

<head>
    <title>Productos - Auto Sport Willy</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="../Vista/CSS/Estilos.css">
    <script src="../Vista/JS/jquery-3.2.1.js"></script>

</head>

<body id="body-listaproductos">
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
    <!-- Contenido Cuerpo -->
    <div class="contenido-pag-productos">
        <div class="categoria-producto">
            <button name="todos " class="boton-categoria-productos">Todos</button>
            <button name="Tapa de rueda" class="boton-categoria-productos">Tapa de rueda</button>
            <button name="Limpiaparabrisas" class="boton-categoria-productos">Limpiaparabrisas</button>
            <button name="Seguro de rueda" class="boton-categoria-productos">Seguro de rueda</button>
            <button name="Gomas de puerta" class="boton-categoria-productos">Gomas de puerta</button>
            <button name="Sobrepisos" class="boton-categoria-productos">Sobrepisos</button>
            <button name="Sobreasientos" class="boton-categoria-productos">Sobreasientos</button>
            <button name="Forros de timon" class="boton-categoria-productos">Forros de timón</button>
            <button name="Forros de asiento" class="boton-categoria-productos">Forros de asiento</button>
            <button name="Accesorios de ayuda" class="boton-categoria-productos">Accesorios de ayuda</button>
            <button name="Accesorios de adornos" class="boton-categoria-productos">Accesorios de adornos</button>
            <div>
                <img src="../img/imgListaProductos/14.jpg" class="imagen-productos">
            </div>
        </div>
    </div>
    
    <!-- Contenido Busqueda -->
    <form action="../Modelo/muestra_datos_buscarenlistaproductos.php" method="POST">

    <button type="submit" name ="submit" value="Enviar">Buscar </button> 
    <input class="input" type="text" id="buscar-listaproductos" name="buscar-listaproductos" placeholder="  buscar producto  " size="80 ">
    <!-- Contenido Cuerpo -->
    <div class="lista-productos ">
        <div class="contenido-productos" category="Accesorios de adornos" >
            <img src="../img/imgListaProductos/acce52.png" class="img-productos">
            <a class="boton-nombreproductos" name="publish" type="button" id="btn">Adorno adhesivo huellitas de perro</a>            
            <button class="boton-nombreproductos" id="btn">Adorno adhesivo huellitas de perro</button>
            <input type="hidden" name="nombre[]" value="Adorno adhesivo huellitas de perro" id="valor">
            <input type="hidden" name="categoria[]" value="Accesorios de adornos">
        </div>
        <div class="contenido-productos" category="Accesorios de adornos">
            <img src="../img/imgListaProductos/acce53.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Adorno adhesivo cromado águila</a>
            <input type="hidden" name="nombre[]" value="Adorno adhesivo cromado águila" id="valor">
            <input type="hidden" name="categoria[]" value="Accesorios de adornos">
        </div>
        <div class="contenido-productos" category="Accesorios de ayuda">
            <img src="../img/imgListaProductos/acce48.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Extintor pqs c/brackets azul</a>
            <input type="hidden" name="nombre[]" value="Extintor pqs c/brackets azul" id="valor">
            <input type="hidden" name="categoria[]" value="Accesorios de ayuda">
        </div>
        <div class="contenido-productos" category="Accesorios de ayuda">
            <img src="../img/imgListaProductos/acce49.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Extintor pqs c/brackets rojo</a>
            <input type="hidden" name="nombre[]" value="Extintor pqs c/brackets rojo" id="valor">
            <input type="hidden" name="categoria[]" value="Accesorios de ayuda">
        </div>
        <div class="contenido-productos" category="Forros de timon">
            <img src="../img/imgListaProductos/forr43.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Forro de timón cuero negro</a>
            <input type="hidden" name="nombre[]" value="Forro de timón cuero negro" id="valor">
            <input type="hidden" name="categoria[]" value="Forros de timon">
        </div>
        <div class="contenido-productos" category="Gomas de puerta">
            <img src="../img/imgListaProductos/goma31.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Goma universal maletero alambrado</a>
            <input type="hidden" name="nombre[]" value="Goma universal maletero alambrado" id="valor">
            <input type="hidden" name="categoria[]" value="Gomas de puerta">
        </div>
        <div class="contenido-productos" category="Gomas de puerta">
            <img src="../img/imgListaProductos/goma30.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Goma puerta autos alambrado U</a>
            <input type="hidden" name="nombre[]" value="Goma puerta autos alambrado U" id="valor">
            <input type="hidden" name="categoria[]" value="Gomas de puerta">
        </div>
        <div class="contenido-productos" category="Gomas de puerta">
            <img src="../img/imgListaProductos/goma29.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Goma cama universal</a>
            <input type="hidden" name="nombre[]" value="Goma cama universal" id="valor">
            <input type="hidden" name="categoria[]" value="Gomas de puerta">
        </div>
        <div class="contenido-productos" category="Accesorios de ayuda">
            <img src="../img/imgListaProductos/acce55.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Kit tapasoles felinos</a>
            <input type="hidden" name="nombre[]" value="Kit tapasoles felinos" id="valor">
            <input type="hidden" name="categoria[]" value="Accesorios de ayuda">
        </div>
        <div class="contenido-productos" category="Accesorios de ayuda">
            <img src="../img/imgListaProductos/acce56.png"  class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Kit tapasoles plateados</a>
            <input type="hidden" name="nombre[]" value="Kit tapasoles plateados" id="valor">
            <input type="hidden" name="categoria[]" value="Accesorios de ayuda">
        </div>
        <div class="contenido-productos" category="Limpiaparabrisas">
            <img src="../img/imgListaProductos/limp19.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Plumillas simple metálico de 6”</a>
            <input type="hidden" name="nombre[]" value="Plumillas simple metálico de 6”" id="valor">
            <input type="hidden" name="categoria[]" value="Limpiaparabrisas">
        </div>
        <div class="contenido-productos" category="Limpiaparabrisas">
            <img src="../img/imgListaProductos/limp18.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Plumillas simple plástico de 8”</a>
            <input type="hidden" name="nombre[]" value="Plumillas simple plástico de 8”" id="valor">
            <input type="hidden" name="categoria[]" value="Limpiaparabrisas">
        </div>
        <div class="contenido-productos" category="Limpiaparabrisas">
            <img src="../img/imgListaProductos/limp17.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Bosch plumillas simple de 18” color negro</a>
            <input type="hidden" name="nombre[]" value="Bosch plumillas simple de 18” color negro" id="valor">
            <input type="hidden" name="categoria[]" value="Limpiaparabrisas">
        </div>
        <div class="contenido-productos" category="Accesorios de ayuda">
            <img src="../img/imgListaProductos/acce50.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Protector UV 3 silicona</a>
            <input type="hidden" name="nombre[]" value="Protector UV 3 silicona" id="valor">
            <input type="hidden" name="categoria[]" value="Accesorios de ayuda">
        </div>
        <div class="contenido-productos" category="Sobrepisos">
            <img src="../img/imgListaProductos/sobr32.png" class="img-productos">
            <a class="boton-nombreproductos" type="button" id="btn">Piso jebe universal</a>
            <input type="hidden" name="nombre[]" value="Piso jebe universal" id="valor">
            <input type="hidden" name="categoria[]" value="Sobrepisos">
        </div>

    </div>
    <!-- JS -->
    </form>
    
    <script>
        var nombre="nuevo nombre";
        document.getElementById("buscar-listaproductos").innerHTML = nombre;
    </script>

    <script src="../Vista/JS/productos.js"></script>
</body>
</html>