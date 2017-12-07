<?php
$mysqli = mysqli_connect("localhost", "root", "", "ene");
if (!$mysqli) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$sql = "SELECT soy, count(soy) as taller FROM publico GROUP BY soy";

$data = $donut = [];
if($result = $mysqli->query($sql))
{
      while($row = $result->fetch_object())
      {
          $data[] = $row;
          $donut[] = (object)array("label" => $row->soy, "value" => $row->taller);
      }
 }