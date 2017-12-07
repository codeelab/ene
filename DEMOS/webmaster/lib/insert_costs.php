<?php
error_reporting( error_reporting() & ~E_NOTICE );
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(isset($_POST["publico_gral"])){$publico = $_POST["publico_gral"]; }else $publico=0;
if(isset($_POST["costo_publico"])){$cpublico = $_POST["costo_publico"]; }else $cpublico=0;
if(isset($_POST["estudiantes"])){$estudiantes = $_POST["estudiantes"]; }else $estudiantes=0;
if(isset($_POST["costo_estudiante"])){$cestudiantes = $_POST["costo_estudiante"]; }else $cestudiantes=0;
if(isset($_POST["sede"])){$sede = $_POST["sede"]; }else $sede=0;
if(isset($_POST["ubicacion"])){$ubicacion = $_POST["ubicacion"]; }else $ubicacion=0;


$sql="INSERT INTO costos(publico_gral, estudiantes, costo_publico, costo_estudiante, sede, ubicacion) values ('".$publico."','".$estudiantes."','".$sede."','".$ubicacion."','".$cpublico."','".$cestudiantes."')";
    mysql_query($sql);
    header ("Location: costs");

?>
