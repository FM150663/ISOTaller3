<?php
	$personas = array(
			'Danielin'=>array(
				'materia1'=>'SSI',
				'materia2'=>'ISO',
				'materia3'=>'DSM'),
			'Xenia' => array(
				'materia1'=>'LIS',
				'materia2'=>'ISO',
				'materia3'=>'DSM',
				'materia4'=>'ASR')
	);

	if(isset($_POST['Enviar']) && $_POST['Enviar']!=null){
		$nombre=$_POST['nombre'];
		$materia1=$_POST['materia1'];
		$materia2=$_POST['materia2'];
		$personas[$nombre]=array('materia1'=>$materia1,
								 'materia2'=>$materia2);
								 
								 $totalMaterias=0;
	echo '<span>';
	foreach($personas as $nombre=>$listaMaterias){
		echo "$nombre<br>";
		echo "<ul>";
		foreach($listaMaterias as $materia=>$codigo){
				echo "<li>$materia: $codigo</li>";
				$totalMaterias++;
		}
		echo "</ul>";
		echo "<span>Materias cursando: $totalMaterias</span><br>";
		$totalMaterias=0;
	}
	echo '</span>';
	
	}else{
?>
<form action="index.php" method="post">
	<input type="text" name="nombre" placeholder="ingrese el nombre"/><br>
	<input type="text" name="materia1" placeholder="ingrese materia1"/><br>
	<input type="text" name="materia2" placeholder="ingrese materia2"/><br>	
	<input type="submit" value="Enviar" name="Enviar"/>
</form>
<?php
	}
?>