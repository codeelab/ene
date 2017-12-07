<?php
$dbhost = 'localhost';
$dbuser = 'foroene_morelia';
$dbpass = '+For03ne$2017+';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$cod=$_GET['cod'];
$sql = 'INSERT INTO basura
        SELECT * FROM publico
        WHERE id_publico='.$cod;

mysql_select_db('foroene_2017');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$cod=$_GET['cod'];
$sql = 'DELETE FROM publico
        WHERE id_publico='.$cod;

mysql_select_db('foroene_2017');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
header("Location: ../folio");

mysql_close($conn);
?>



