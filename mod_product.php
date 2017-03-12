<?php 
	
	require('conexion.php');
	
	$id_producto=$_POST['id'];
	$producto=$_POST['producto'];
	$descripcion=$_POST['descripcion'];
	$existencias=$_POST['existencias'];
	$precio_compra=$_POST['precio_compra'];
	$precio_venta=$_POST['precio_venta'];
	
	$query="UPDATE productos SET producto='$producto', descripcion='$descripcion', existencias='$existencias', precio_compra='$precio_compra', precio_venta='$precio_venta' WHERE id_producto='$id_producto'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar producto</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Producto Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Producto</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				