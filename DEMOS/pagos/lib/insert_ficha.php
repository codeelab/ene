<?php
error_reporting( error_reporting() & ~E_NOTICE );
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

$id=$_POST['id_publico'];
if(isset($_POST["referencia_pago"])){$deposito = $_POST["referencia_pago"]; }else $deposito="S/N";
//if(isset($_POST["pago"])){$pago = $_POST["pago"]; }else $pago="S/N";


$sql=("UPDATE publico
      SET referencia_pago = '$deposito'
      WHERE id_publico = ".$id);

//echo $sql;
//echo exit;
    mysql_query($sql);
   header ("Location: ../deposito");

?>
