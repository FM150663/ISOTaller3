<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilo.css" />
	<title>Registro de Notas</title>
</head>
<body>
<form action="Taller2_Ejercicio1.php" method="post" name="formulario">
	<h2>Ingrese las calificaciones de los alumnos</h2>
<div class="formula">

	<input class="name" type="text" name="nombre" placeholder="ingrese el nombre"/><br><br>
	<h3>Ingrese las siguientes notas</h3><br>
	<input class="tarea" type="number" name="tarea" max="10" min="0" placeholder="Tarea"/><br><br>
	<input class="investigacion" type="number" name="investigacion" max="10" min="0" placeholder="Investigación"/><br><br>
	<input class="examen" type="number" name="examen" max="10" min="0" placeholder="Examen"/><br><br><br>
	<input class="boton" type="submit" value="Guardar" name="Guardar"/>
	<a class="boton2"  href="limpiar.php">limpiar</a>
</form>
</div>

<?php
if(isset($_POST['Guardar']) && $_POST['Guardar']!=null){
	$alumno=(isset($_SESSION['alumno'])?$_SESSION['alumno']:array());

	$nombre=$_POST['nombre'];
	$tarea=$_POST['tarea'];
	$investigacion=$_POST['investigacion'];
	$examen=$_POST['examen'];
	$notafinal=0;
	$alumno[$nombre]=array('tarea'=>$tarea,
						   'investigacion'=>$investigacion,
						   'examen'=>$examen);
	$_SESSION['alumno']=$alumno;
	echo '<span>';
	foreach ($alumno as $nombre => $notas) {
		echo "<table>
				<tr>
					<th colspan=\"3\">$nombre</th>
				</tr>
				<tr>
					<th>Tarea</th>
					<th>Investigación</th>
					<th>Examen</th>
				</tr>
				<tr><hr>";
	foreach ($notas as  $actividad => $valornota) {
		 echo "<td>$valornota</td>";
		 if($actividad == 'tarea'){
		 	$notafinal += $valornota*0.5;
		 } 
		 if($actividad == 'investigacion'){
		 	$notafinal += $valornota*0.3;
		 } 
		 if($actividad == 'examen'){
		 	$notafinal += $valornota*0.2;
		 } 

	}
	echo"</tr>
			<tr><td colspan=\"3\">promedio: $notafinal</td></tr>";
			$notafinal=0;
	}
}
?>
</body>
</html>