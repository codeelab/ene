<?php

require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);
@session_start();

$user_name = $_SESSION["nombre"]." ".$_SESSION["apaterno"]." ".$_SESSION["amaterno"];
if(! $conexion )
{
  die('Could not conexionect: ' . mysql_error());
}


$sql = 'UPDATE publico
        SET material=1, solucion=NOW(), entrego="'.$user_name.'"
        WHERE id_publico ='.$_GET['id'];

mysql_query($sql);

header("Location: ../folio");

 ?>

