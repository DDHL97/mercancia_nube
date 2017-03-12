<?php 
	
	require('conexion.php');
	
	$producto=$_POST['producto'];
	$descripcion=$_POST['descripcion'];
	$existencias=$_POST['existencias'];
	$precio_compra=$_POST['precio_compra'];
	$precio_venta=$_POST['precio_venta'];
	
	$query="INSERT INTO productos (producto, descripcion, existencias, precio_compra, precio_venta) VALUES ('$producto','$descripcion','$existencias','$precio_compra','$precio_venta')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar producto</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Producto Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Producto</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	