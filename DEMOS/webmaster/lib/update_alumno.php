<?php
error_reporting( error_reporting() & ~E_NOTICE );
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(! $conexion )
{
  die('Could not conexionect: ' . mysql_error());
}

$nombre=$_POST['nombre'];
$paterno=$_POST['a_paterno'];
$materno=$_POST['a_materno'];
$matricula=$_POST['matricula'];

$sql = ("UPDATE matricula
        SET nombre='$nombre', a_paterno='$paterno', a_materno='$materno', matricula='$matricula'");
//echo $sql;
//echo exit;
mysql_query($sql);

header("Location: ../alumnos");

 ?>

