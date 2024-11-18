<?php
include("dbcatalogo.php");

if(isset($_POST['register']))
{
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 3 && strlen($_POST['telefono']) === 9 && strlen($_POST['mensaje']) >= 1)
{
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $telefono = trim($_POST['telefono']);
    $mensaje = trim($_POST['mensaje']);
    $consulta = "INSERT INTO contactanos(nombre, correo, telefono, mensaje) VALUES ('$nombre','$correo','$telefono','$mensaje')";
    $resultado = mysqli_query($conex,$consulta);
    if($resultado){
        ?>
        <h3 class = "ok">¡Se envio correctamente!</h3>
        <?php
    }
    else
    {
        ?>
        <h3 class = "bad">¡Ups ha ocurrido un error!</h3>
        <?php
    }
}
    else{
        ?>
        <h3 class = "bad">¡Porfavor completa los campos!</h3>
        <?php
    }
    }



/* if($conex){
    echo "todo correcto";
}
else{
    echo "ha ocurrido un problema";
} */
?>