<?php
	
	require('conexion.php');
	$id_producto=$_GET['id_producto'];
	$query="SELECT producto, descripcion, existencias, precio_compra, precio_venta FROM productos WHERE id_producto='$id_producto'";
	$resultado=$mysqli->query($query);
	$row=$resultado->fetch_assoc();
?>

<html>
	<head>
		<title>Productos</title>
	</head>
	<body>
		
		<center><h1>Modificar Producto</h1></center>
		
		<form name="modificar_producto" method="POST" action="mod_product.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id_producto; ?>">
					<td width="20"><b>Producto</b></td>
					<td width="30"><input type="text" name="producto" size="25" value="<?php echo $row['producto']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Descripcion</b></td>
					<td><input type="text" name="descripcion" size="25" value="<?php echo $row['descripcion']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Existencias</b></td>
					<td><input type="text" name="existencias" size="25" value="<?php echo $row['existencias']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Precio compra</b></td>
					<td><input type="text" name="precio_compra" size="25" value="<?php echo $row['precio_compra']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Precio venta</b></td>
					<td><input type="text" name="precio_venta" size="25" value="<?php echo $row['precio_venta']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
