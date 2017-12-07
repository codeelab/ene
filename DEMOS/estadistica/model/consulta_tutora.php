<?php
include "../lib/config.php";
$link=  Conectarse();


$id=$_POST['id_publico'];

$registro_query = "SELECT * FROM publico WHERE id_publico=$id";
$cliente = mysql_query($registro_query, $link) or die(mysql_error());
$totalRows_registro = mysql_num_rows($cliente);
if($totalRows_registro==0) $error = 'No encontrado';
$row_cliente = mysql_fetch_assoc($cliente); //obtener el primer registro...

$retorno=new stdClass();

$retorno->resultado="OK";
$retorno->registro=array(
    'id_publico'=>$row_cliente['id_publico'],
    'id_publico_tutora'=>$row_cliente['id_publico'],
    'nombre_tutora'=>$row_cliente['nombre'],
    'para_tutora'=>$row_cliente['c_personal']
);
echo json_encode($retorno);