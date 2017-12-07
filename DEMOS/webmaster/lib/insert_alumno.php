<?php
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(isset($_POST["nombre"])){$nombre = $_POST["nombre"]; }else $nombre=0;
if(isset($_POST["a_paterno"])){$a_paterno = $_POST["a_paterno"]; }else $a_paterno=0;
if(isset($_POST["a_materno"])){$a_materno = $_POST["a_materno"]; }else $a_materno=0;
if(isset($_POST["matricula"])){$matricula = $_POST["matricula"]; }else $matricula=0;

mysql_query("SET NAMES 'utf8'");
$sql="INSERT INTO matricula(nombre, a_paterno, a_materno, matricula) values ('".$nombre."','".$a_paterno."','".$a_materno."','".$matricula."')";
    mysql_query($sql);
    header ("Location: ../alumnos");

?>
