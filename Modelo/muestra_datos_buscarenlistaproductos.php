<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/CSS/Estilos_productosmostrados.css">
</head>
<body>
    <h1>Datos de búsqueda en la lista de productos</h1>
    <?php    
    //buscar
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $se = $_POST['buscar-listaproductos'];
    if (in_array($se, $nombre)) {
        echo "<p>Existe producto:";
        echo nl2br("\r\n");
        echo nl2br("\r\n");
        echo "[";
        $pos = array_search($se, $nombre);            
        echo $nombre[$pos];
        echo "] ";
        echo nl2br("\r\n");
        echo nl2br("\r\n");
        echo "Su categoría es: ";
        echo "[";
        echo $categoria[$pos];
        echo "] </p>";
        
    } else {
        echo "<p>No existe el producto [";
        echo "$se] en la lista</p>";
        echo nl2br("\r\n");
    }

    //$n = count($_POST['nombre']);
    //$m = count($_POST['categoria']);
    //nombre
    echo nl2br("\r\n");
    print "<h3>Productos en el formulario: </h3><div class='producto'>";
    foreach ($_POST['nombre'] as $campo) {        
        print "<li class='lista'>{$campo}</li>";
    }
    print "</div>";
    echo nl2br("\r\n");    
    print  "<div class='arrow'>";
    foreach ($_POST['nombre'] as $campo) {        
        print "<li>=></li>";
    }
    print "</div>";
    //categoria
    echo nl2br("\r\n"); 
    print "<div class='categoria'>";
    foreach ($_POST['categoria'] as $campo) {
        print "<li class='lista'>{$campo}</li>";
    }
    print "</div>";
    
    ?>
</body>
</html>