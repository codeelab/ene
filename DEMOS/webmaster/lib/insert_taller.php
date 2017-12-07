<?php
error_reporting( error_reporting() & ~E_NOTICE );
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);
mysql_query("SET NAMES 'utf8'");

if(isset($_POST["nombres"])){$nombre = $_POST["nombres"]; }else $nombre='S/N';
if(isset($_POST["cupo"])){$cupo = $_POST["cupo"]; }else $cupo=0;

    $sql="INSERT INTO taller(nombres, cupo) values ('".$nombre."','".$cupo."')";

    //echo $sql;
    //echo exit;
    mysql_query($sql);

   header ("Location: ../talleres");

?>
