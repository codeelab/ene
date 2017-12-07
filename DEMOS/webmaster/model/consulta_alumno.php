<?php
include "../lib/config.php";
$link=  Conectarse();


$id=$_POST['id_matricula'];

$registro_query = "SELECT * FROM matricula WHERE id_matricula=$id";
$cliente = mysql_query($registro_query, $link) or die(mysql_error());
$totalRows_registro = mysql_num_rows($cliente);
if($totalRows_registro==0) $error = 'No encontrado';
$row_cliente = mysql_fetch_assoc($cliente); //obtener el primer registro...

$retorno=new stdClass();

$retorno->resultado="OK";
$retorno->registro=array(
    'id_matricula'=>$row_cliente['id_matricula'],
    'id_matricula_alumno'=>$row_cliente['id_matricula'],
    'nombre_alumno'=>$row_cliente['nombre'],
    'paterno_alumno'=>$row_cliente['a_paterno'],
    'materno_alumno'=>$row_cliente['a_materno']
);
echo json_encode($retorno);