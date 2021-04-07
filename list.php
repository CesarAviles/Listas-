<?php

$conexion=mysqli_connect('localhost','root','cesar12434','estudiantes');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista datos</title>
</head>
<body>
	<br>
    
    <center>	
	<table border="1">
		<font size=5><FONT FACE="Dutch801 Rm BT Bold">LISTADO DE ALUMNOS</font>
		<tr>
		<td>Matricula</td>
		<td>Nombre</td>
		<td>P_Apellido</td>
		<td>S_Apellido</td>
		</tr>
		<?php
		$sql="SELECT * from alumnos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			?>
		<tr>
		<td><?php echo $mostrar['matricula']?></td>
		<td><?php echo $mostrar['p_apellido']?></td>
		<td><?php echo $mostrar['s_apellido']?></td>
		<td><?php echo $mostrar['nombre']?></td>
		</tr>
		<?php
		}
		?>
		</table>	
		</center>	
</body>
</html>