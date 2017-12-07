<?php
error_reporting( error_reporting() & ~E_NOTICE );
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(isset($_POST["nombre"])){$nombre = $_POST["nombre"]; }else $nombre=0;
if(isset($_POST["url"])){$url = $_POST["url"]; }else $url=0;


$sql="INSERT INTO menu(nombre, url) values ('".$nombre."','".$url."')";
    mysql_query($sql);
    header ("Location: ../menu");

?>
