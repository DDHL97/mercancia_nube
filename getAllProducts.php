<?php
$db_host = "jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
     $db_name = "t97bvexsdrc2901u";
     $db_user = "cx0cbb132z69nw9j";
     $db_password = "axlcj5fiygl8zsh0";
    
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
    
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
    @mysql_query("SET NAMES 'utf8'");

$sql_query = "SELECT * FROM productos;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
