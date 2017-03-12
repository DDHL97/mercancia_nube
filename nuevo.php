<html>
	<head>
		<title> Productos </title>
	</head>
	<body>
		
		<center><h1> Nuevo Producto </h1></center>
		
		<form name="nuevo_producto" method="POST" action="guarda_producto.php">
			<table width="50%">
				<tr>
					<td width="20"><b>Producto</b></td>
					<td width="30"><input type="text" name="producto" size="25" /></td>
				</tr>
				<tr>
					<td><b>Descripcion</b></td>
					<td><input type="text" name="descripcion" size="25" /></td>
				</tr>
				<tr>
					<td><b>Existencias</b></td>
					<td><input type="text" name="existencias" size="25" /></td>
				</tr>
				<tr>
					<td><b>Precio compra</b></td>
					<td><input type="text" name="precio_compra" size="25" /></td>
				</tr>
				<tr>
					<td><b>Precio venta</b></td>
					<td><input type="text" name="precio_venta" size="25" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>						