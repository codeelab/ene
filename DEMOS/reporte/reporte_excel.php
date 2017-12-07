<?php

header("Content-type: application/vnd.ms-excel");
//header("Content-Disposition: attachment; filename=PONENTES_CONGRESO_2016.xls");
//header("Content-Disposition: attachment; filename=reporte_GENERAL_jueves.xls");


        $conexion=mysql_connect("localhost","foroene_morelia","+For03ne$2017+");
        mysql_select_db("foroene_2017",$conexion);
header("Content-Type: text/html;charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8 " />
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="5" bgcolor="#ec008c" align="center"><CENTER><strong style="color:#fff">REPORTE GENERAL 06/04/2017 - 3PM</strong></CENTER></td>
  </tr>
  <tr bgcolor="#29bdbe" align="center">
    <td><strong>NOMBRE</strong></td>
    <td><strong>CORREO</strong></td>
  </tr>

<?PHP

//TODOS LOS ACEPTADOS AL CONGRESO
mysql_query("SET NAMES 'utf8'");
//$sql=mysql_query("SELECT * FROM publico WHERE status = 1 AND taller = 28");
$sql=mysql_query("SELECT * FROM publico WHERE status = 1 AND c_personal IS NOT NULL");
$count=1;
while($res=mysql_fetch_array($sql)){

  $contador=$count++;
  $nombre=$res["nombre"];
  $paterno=$res["a_paterno"];
  $materno=$res["a_materno"];
  $correo = $res["c_personal"];
?>
 <tr>
    <td><?php echo $nombre." ".$paterno." ".$materno; ?></td>
    <td><?php echo $correo; ?></td>
 </tr>
  <?php
}
  ?>
</table>
</body>
</html>