<!DOCTYPE html>
<html lang="es">
<head>
	<title>Eliminar</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
	<h1>Eliminar usuario</h1>
</header>

<?php 
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM usuario WHERE id='$id'";
	$resultado=$mysqli->query($query);
	
?>
	<center>
		<?php
			if($resultado>0){
				echo '<h1>Tarea eliminada...</h1>';
			}else{
				echo '<h1>Error al eliminar tarea...</h1>';
			}
		?>
		<a href="backend.php">Regresar</a>
	</center>
	
</body>
</html>