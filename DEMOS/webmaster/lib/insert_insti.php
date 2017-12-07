<?php
//error_reporting( error_reporting() & ~E_NOTICE );
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);


$nombre_completo = $_POST['nombre_completo'];
$nombre_corto = $_POST['nombre_corto'];
$direccion = $_POST['direccion'];
$colonia = $_POST['colonia'];
$telefono = $_POST['telefono1'];
$telefonos = $_POST['telefono2'];
$convocatoria = $_POST['convocatoria'];
$instagram = $_POST['instagram'];
$youtube = $_POST['youtube'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];

$sql = "UPDATE escuela SET nombre_completo = '$nombre_completo', nombre_corto = '$nombre_corto', direccion = '$direccion', colonia = '$colonia', telefono1 = '$telefono', telefono2 = '$telefonos', convocatoria = '$convocatoria', instagram = '$instagram', youtube = '$youtube', facebook = '$facebook', twitter = '$twitter' WHERE id_escuela = 1";
mysql_query("SET NAMES 'utf8'");
$retval = mysql_query( $sql, $conexion );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
header ("Location: ../informacion");

?>
