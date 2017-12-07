<?php

function Conectarse(){

$bd_host = "localhost";//servidor
$bd_usuario = "root"; //usuario server
$bd_password = ""; //password server
$bd_base = "ene"; //Base de datos

if (!($link=mysql_connect($bd_host, $bd_usuario, $bd_password))) {
echo "Error conectando a la base de datos.";
exit();
}

/*en nombre_BD va el nombre de la BD que creaste al principio*/

if (!mysql_select_db($bd_base,$link)){
echo "Error seleccionando la base de datos.";
exit();
}
return $link;
}

$link = Conectarse();

mysql_close($link); //cierra la conexion

?>