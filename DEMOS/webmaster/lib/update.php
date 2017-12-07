<?php
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(! $conexion )
{
  die('Could not conexionect: ' . mysql_error());
}

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$email=$_POST['email'];
$login=$_POST['login'];


$sql = ("UPDATE usuarios
        SET nombre='$nombre', apaterno='$apaterno', amaterno='$amaterno', email='$email', login='$login' WHERE id='$id'");
echo $sql;
echo exit;
//mysql_query($sql);

//header("Location: ../usuarios");

 ?>

