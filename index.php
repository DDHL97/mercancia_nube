<?php
	require('conexion.php');
	$query="SELECT id_producto, producto, descripcion, existencias, precio_compra, precio_venta FROM productos";
	$resultado=$mysqli->query($query);	
?>
<html>
	<head>
		<title>Productos</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width= device-width, user-scalable= no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0" >
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/animate.css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	</head>

	<body>
		<table border="0" width="85%">
			<tr>
				<td width="100"></td>
				<td><img src="img/productos.jpg" class="animated fadeIn"></td>
				<td>
		<h1 class="verdana grande azul animated fadeIn retraso-1"> Productos </h1></td>
			<td><a href="nuevo.php"><img src="img/regresar.png" class="animated fadeInDown"></a></td>
			</tr>
		</table>
		
		<div class="col-md-3 center-block quitar-float text-center espacio-arriba">
		
		<div class="animated fadeInDown retraso-2"> 
		
		<a href="nuevo.php">Nuevo producto</a>
		<p></p>
		
		<table border=0 width="80%">
			<thead>
				<tr>
					<td><b> Producto </b></td>
					<td><b> Descripcion </b></td>
					<td><b> Existencias </b></td>
					<td><b> Precio Compra </b></td>
					<td><b> Precio Venta </b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){?>
						<tr>
							<td>
							<?php echo $row['producto'];?>
							</td>
							<td>
								<?php echo $row['descripcion'];?>
							</td>
							<td>
								<?php echo $row['existencias'];?>
							</td>
							<td>
								<?php echo $row['precio_compra'];?>
							</td>
							<td>
								<?php echo $row['precio_venta'];?>
							</td>
							<td>
								<a href="modificar.php?id_producto=<?php echo $row['id_producto'];?>">
									<p><img src="img/editar.png" width="54" height="54" /></p></a>
							</td>
							<td>
								<a href="eliminar.php?id_producto=<?php echo $row['id_producto'];?>"><p><img src="img/borrar.png" width="54" height="54"></p></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
	</body>
</html>	
