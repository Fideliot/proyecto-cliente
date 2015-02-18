<!DOCTYPE html>
<html lang="es">
<head>
	<title>Clientes</title>
	<meta charset="utf-8" />
</head>
<body>
<header>
	<h1>Clientes</h1>
</header>


<?php
//conexion a la base de datos  para sacar los datos de la tabla clientes
	require('conexion.php');
	
	$query="SELECT estado_id, nombre, apellidos, telefono, email FROM clientes";
	
	$resultado=$mysqli->query($query);
	//var_dump($resultado);
	//exit;
?>

	
	<table class="tabla">
	
		<caption><strong>DATOS DE USUARIOS</strong></caption>
			<tr>
				<th>Estado</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Telefono</th>
				<th>Email</th>


			</tr>
		<tbody>
			<?php while($row=$resultado->fetch_assoc()){ ?>
			<tr>
				<td>
					<?php echo $row['estado_id'];?>
				</td>
				<td>
					<?php echo $row['nombre'];?>
				</td>
				<td>
					<?php echo $row['apellidos'];?>
				</td>
				<td>
					<?php echo $row['telefono'];?>
				</td>
				<td>
					<?php echo $row['email'];?>
				</td>

				<td>
					<a href="modificar.php?id=<?php echo $row['id'];?>"><span class="icon-pencil"> </span>Editar</a>
					<?php echo'  '; ?>
					<a href="eliminar.php?id=<?php echo $row['id'];?>"><span class="icon-bin"> </span>   Eliminar</a>
					<?php echo'  '; ?>
					<a href="cuadricula.php?id=<?php echo $row['id'];?>"><span class="icon-list"></span>   A. Cuadricula</a>
				</td>

			</tr>

			<?php } ?>

		</tbody>
	</table>


<footer><h6>clientes</h6></footer>

</body>
</html>	
	
