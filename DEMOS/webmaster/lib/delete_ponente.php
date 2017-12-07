<?php
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(! $conexion )
{
  die('Could not conexionect: ' . mysql_error());
}
$cod=$_GET['cod'];
$sql = 'DELETE FROM ponentes
        WHERE id_ponente='.$cod;
//echo $sql;
//echo exit;
mysql_query($sql);

header("Location: ../speakers");

 ?>