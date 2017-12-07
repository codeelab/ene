<?php
$dbhost = 'localhost';
$dbuser = 'foroene_morelia';
$dbpass = '+For03ne$2017+';
@session_start();
$user_name = $_SESSION["nombre"]." ".$_SESSION["apaterno"]." ".$_SESSION["amaterno"];

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$sql = 'UPDATE publico
        SET material=1, solucion=NOW(), entrego="'.$user_name.'"
        WHERE id_publico ='.$_GET['mat'];

mysql_select_db('foroene_2017');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
    header("Location: ../folio");
mysql_close($conn);
?>

