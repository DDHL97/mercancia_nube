<?php
	
	
	$mysqli=new mysqli("jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","cx0cbb132z69nw9j","axlcj5fiygl8zsh0","t97bvexsdrc2901u"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	//$mysqli=new mysqli("localhost","root","","mercancia");

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>