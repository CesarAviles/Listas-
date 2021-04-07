<?php
$connexion = new mysqli('localhost', 'root', 'cesar12434', 'estudiantes');
$matricula = (int)$_POST['mat'];

$connexion->query('DELETE FROM alumnos WHERE matricula = '.$matricula);
 
echo 'Se ha eliminado correctamente el elemento con id='.$matricula.'.';
?>