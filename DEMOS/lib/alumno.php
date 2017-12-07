<?php
    $conexion = new mysqli('localhost','foroene_morelia','+For03ne$2017+','foroene_2017',3306);
    $matricula = $_POST['matricula'];
    $consulta = "SELECT nombre,a_paterno,a_materno FROM matricula WHERE matricula = '$matricula'";
    $result = $conexion->query($consulta);
    $respuesta = new stdClass();
    if($result->num_rows > 0){
        $fila = $result->fetch_array();
        $respuesta->nombre = utf8_encode($fila['nombre']);
        $respuesta->a_paterno = utf8_encode($fila['a_paterno']);
        $respuesta->a_materno = utf8_encode($fila['a_materno']);
    }
    echo json_encode($respuesta);

?>