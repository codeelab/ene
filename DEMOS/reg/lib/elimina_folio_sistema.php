<?php
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(! $conexion )
{
  die('No se pudo conectar: ' . mysql_error());
}

$id=$_GET['id'];
$idTaller=$_GET['taller'];

$sql = 'DELETE FROM publico
        WHERE id_publico='.$id;

$sql = 'UPDATE FROM taller
        SET cupo  = cupo + 1
        WHERE id_taller='.$idTaller;

//mysql_query($sql);
echo $sql;
echo exit;

//header("Location: ../cancelado");

 ?>