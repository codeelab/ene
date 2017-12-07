<?php
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(! $conexion )
{
  die('Could not conexionect: ' . mysql_error());
}
$id=$_POST['id'];
$nombre=$_POST['nombres'];
$cupo=$_POST['cupo'];

mysql_query("SET NAMES 'utf8'");
$sql = ("UPDATE taller
        SET nombres='$nombre', cupo='$cupo'
        WHERE id_taller=".$id);
//echo $sql;
//echo exit;
mysql_query($sql);

header("Location: ../talleres");

 ?>

