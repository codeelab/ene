<?php
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);


if(! $conexion )
{
  die('Could not conexionect: ' . mysql_error());
}


$sql = 'UPDATE publico
        SET status=0
        WHERE id_publico ='.$_GET['id'];

mysql_query($sql);

header("Location: ../folio");

 ?>

