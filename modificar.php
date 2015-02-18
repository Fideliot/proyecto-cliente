<!DOCTYPE html>
<html lang="es">
<head>
	<title>Modificar usuario</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
	<h1>Modificar Usuario</h1>
</header>
<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT id, correo, nombre, apellidoPaterno, apellidoMaterno, contrasenia FROM usuario WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>		
		<form name="modificar_usuario" method="POST" action="mod_usuario.php">
			<input type="hidden" name="id" value="<?php echo $id; ?>">

			<label for="correo">Correo</label>
			<input type="text" name="correo" size="25" value="<?php echo $row['correo']; ?>" />

			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" size="25" value="<?php echo $row['nombre']; ?>" />

			<label for="apellidoPaterno">Apellido Paterno</label>
			<input type="text" name="apellidoPaterno" size="25" value="<?php echo $row['apellidoPaterno']; ?>" />

			<label for="contrasenia">Apellido Materno</label>
			<input type="text" name="apellidoMaterno" size="25" value="<?php echo $row['apellidoMaterno']; ?>" />

			<label for="apellidoMaterno">Password</label>
			<input type="password" name="contrasenia" size="25" value="<?php echo $row['contrasenia']; ?>" />

			<input type="submit" name="Guardar" value="Guardar" />	
		</form>
	</body>
</html>	
