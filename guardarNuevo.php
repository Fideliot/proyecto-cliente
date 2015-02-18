<!DOCTYPE html>
<html lang="es">
<head>
	<title>Guardar usuario</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
	<h1>Guardar usuario</h1>
</header>
<?php 
	
	require('conexion.php');
	
	$correo=$_POST['correo'];
	$nombre=$_POST['nombre'];
	$apellidoPaterno=$_POST['apellidoPaterno'];
	$apellidoMaterno=$_POST['apellidoMaterno'];
	$contrasenia=$_POST['contrasenia'];
	
	$query="INSERT INTO usuario(correo, nombre, apellidoPaterno, apellidoMaterno, contrasenia) VALUES ('$correo', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$contrasenia')";
	
	$resultado=$mysqli->query($query);
	
?>
	<center>
		<?php if($resultado>0){ ?>
			<h1>Usuario guardado correctamente...</h1>
			<?php }else{ ?>
			<h1>Error al guardar usuario</h1>		
		<?php	} ?>			
		<a href="backend.php">Regresar</a>
	</center>
</body>
</html>	