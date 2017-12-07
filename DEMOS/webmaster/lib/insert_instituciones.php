<?php
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(isset($_POST["nombre_ins"])){$nombre = $_POST["nombre_ins"]; }else $nombre=0;

mysql_query("SET NAMES 'utf8'");
$sql="INSERT INTO institucion(nombre_ins) values ('".$nombre."')";
    mysql_query($sql);
    header ("Location: ../instituciones");

?>
