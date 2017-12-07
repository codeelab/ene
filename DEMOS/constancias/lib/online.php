<?php
// nos conectamos a la BD
require_once('config.php');
// Tiempo máximo de espera
$time = 5 ;
// Momento que entra en línea
$date = time() ;
// Recuperamos su IP
$ip = $REMOTE_ADDR ;
// Tiempo Limite de espera
$limite = $date-$time*60 ;
// si se supera el tiempo limite (5 minutos) lo borramos
mysql_query("delete from online where date < $limite") ;
// tomamos todos los usuarios en linea
$resp = mysql_query("select * from online where ip='$ip'") ;
// Si son los mismo actualizamos la tabla online
if(mysqli_num_rows($resp) != 0) {
mysqli_query("update online set date='$date' where ip='$ip'") ;
}
// de lo contrario insertamos los nuevos
else {
mysql_query("insert into online (date,ip) values ('$date','$ip')") ;
}
// Seleccionamos toda la tabla
$query = "SELECT * FROM online";
// Ocultamos algún mensaje de error con @
$resp = @mysqli_query($query) or die(mysql_error());
// almacenamos la consulta en la variable $usuarios
$usuarios = mysql_num_rows($resp);
// Si hay 1 usuarios se muestra en singular; si hay más de uno, en plural
if($usuarios > 1 || $usuarios == 0){
    echo "Hay ";
}else{
    echo "Hay ";
}if($usuarios == 0){
    echo "no ";
}else{
    echo("<span class='badge'>" . $usuarios." </span>");
}if($usuarios > 1 || $usuarios == 0){
    echo "usuarios en línea";
}else{
    echo "usuario en línea";
}
?>