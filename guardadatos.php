<?php
	
	$matricula = $_POST['mat'];
        $mombre = $_POST['nom'];
        $p_apellido = $_POST['p_ape'];
        $s_apellido = $_POST['s_ape']; 

	$conexion = new mysqli("localhost","root","cesar12434","estudiantes");
	$actualiza = $conexion->query("insert into alumnos values(".$matricula.
                     ",'".$mombre."','".$p_apellido."','".$s_apellido."')");                                        
	if($actualiza)
		$exito = '{"exito":1}';
	else
		$exito = '{"exito":0}';
	$conexion->close();
	echo($exito);	 		
?>