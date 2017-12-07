<?php

$conexion = new mysqli('localhost','foroene_morelia','+For03ne$2017+','foroene_2017',3306);
$matricula = $_GET['term'];
$consulta = "SELECT matricula FROM matricula WHERE matricula LIKE '%$matricula%'";

$result = $conexion->query($consulta);

if($result->num_rows > 0){
    while($fila = $result->fetch_array()){
        $matriculas[] = $fila['matricula'];
    }
    echo json_encode($matriculas);
}

?>