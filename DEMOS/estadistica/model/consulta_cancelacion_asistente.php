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
    'id_publico_asistente_c'=>$row_cliente['id_publico'],
    'nombre_asistente_c'=>$row_cliente['nombre'].' '.$row_cliente['a_paterno'].' '.$row_cliente['a_materno'],
    'paterno_asistente_c'=>$row_cliente['a_paterno'],
    'materno_asistente_c'=>$row_cliente['a_materno'],
    'para_asistente_c'=>$row_cliente['c_personal']
);
echo json_encode($retorno);