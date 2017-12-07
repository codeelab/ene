<?php
error_reporting( error_reporting() & ~E_NOTICE );
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(! $conexion )
{
  die('Could not conexionect: ' . mysql_error());
}
$cod=$_GET['cod'];
$sql = 'DELETE FROM taller
        WHERE id_taller='.$cod;
//echo $sql;
//echo exit;
mysql_query($sql);

header("Location: ../talleres");

 ?>