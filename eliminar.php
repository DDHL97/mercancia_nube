<?php 
	
	require('conexion.php');
	
	$id_producto=$_GET['id_producto'];
	
	$query="DELETE FROM productos WHERE id_producto='$id_producto'";

	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar producto</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Producto Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Producto</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
