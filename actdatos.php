<?php
$matricula = $_POST['mat'];
$nombre = $_POST['nom'];
$p_apellido = $_POST['p_ape'];
$s_apellido = $_POST['s_ape'];

$server = "localhost";
    $usuario = "root";
    $contraseña = "cesar12434";
    $bd = "estudiantes";

    $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) 
    or die ("Error en la conexion");

mysqli_query($conexion, "UPDATE alumnos set matricula= '$matricula' where matricula='$matricula'") or die ("Error al actualizar");

mysqli_query($conexion, "UPDATE alumnos set p_apellido= '$p_apellido' where matricula='$matricula'") or die ("Error al actualizar");

mysqli_query($conexion, "UPDATE alumnos set s_apellido= '$s_apellido' where matricula='$matricula'") or die ("Error al actualizar");

mysqli_query($conexion, "UPDATE alumnos set nombre= '$nombre' where matricula='$matricula'") or die ("Error al actualizar");

mysqli_close($conexion);
echo "Datos actualizados";
?>


