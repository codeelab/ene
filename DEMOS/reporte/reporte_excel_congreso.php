<?php

header("Content-type: application/vnd.ms-excel");
//header("Content-Disposition: attachment; filename=PONENTES_CONGRESO_2016.xls");
//header("Content-Disposition: attachment; filename=ponentes_oral_congreso_2016.xls");


        $conexion=mysql_connect("localhost","foroene_morelia","+For03ne$2017+");
        mysql_select_db("foroene_2017",$conexion);

header('Content-Type: text/html; charset=iso-8859-1 ');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1 " />
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="5" bgcolor="#ec008c" align="center"><CENTER><strong style="color:#fff">REPORTE TALLER TECNOLOGÍA Y LA INNOVACIÓN EN EL PREESCOLAR (Miércoles) 2017</strong></CENTER></td>
  </tr>
  <tr bgcolor="#29bdbe" align="center">
    <td><strong>#</strong></td>
    <td><strong>FOLIO</strong></td>
    <td><strong>NOMBRE</strong></td>
    <td><strong>TIPO DE TRABAJO</strong></td>
    <td><strong>MESA</strong></td>
  </tr>
  
<?PHP
//TODOS LOS ASISTENTES AL CONGRESO
//$sql=mysql_query("SELECT asistenteid, nombre, telefono, email, institucion, tipos_asistentes.tag, correo_md5 FROM asistente
//                 INNER JOIN tipos_asistentes ON asistente.tipo_asistente_id = tipos_asistentes.id 
//                 ORDER BY asistenteid ASC");

//MUESTRA A TODOS LOS USUARIOS REGISTRADOS EN CONGRESO CIENCIA
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, eje.tag, archivo_extenso FROM trabajos 
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  ORDER BY userid ASC");


//TODOS LOS RESUMENES QUE SE SUBIERON AL SISTEMA
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, eje.tag, archivo_resumen FROM trabajos 
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  WHERE archivo_resumen = archivo_resumen  ORDER BY userid ASC");


//TODOS LOS EXTENSOS QUE SE SUBIERON AL SISTEMA
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, eje.tag, archivo_extenso FROM trabajos 
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  WHERE archivo_extenso = archivo_extenso  ORDER BY userid ASC");

//TODOS LOS ACEPTADOS AL CONGRESO
$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, usuarios.email, eje.tag1, status_2.tag2, tipo_trabajo.tag,
titulo, palabras_clave, colaboradores, no_coautores, asesor, archivo_resumen, archivo_extenso 
FROM trabajos
INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
INNER JOIN eje ON trabajos.ejeid = eje.ejeid
INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid
INNER JOIN status_2 ON trabajos.status_trabajoid = status_2.statusid AND archivo_extenso = archivo_extenso 
ORDER BY eje.ejeid ASC");

//TODOS LOS ACEPTADOS AL CONGRESO ORAL
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso, trabajoid FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE tipo_trabajo.tipo_trabajoid  = 1  AND status_trabajoid = 2 AND archivo_extenso = archivo_extenso ORDER BY eje.ejeid ASC");

//TODOS LOS ACEPTADOS AL CONGRESO CARTEL
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE tipo_trabajo.tipo_trabajoid  = 2  AND status_trabajoid = 2 AND archivo_extenso = archivo_extenso ORDER BY eje.ejeid ASC");

//TODOS LOS RECHAZADOS DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE status_trabajoid = 3 ORDER BY tags ASC");

//TODOS LOS ACEPTADOS MESA 1 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 1 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 1 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 1 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 2 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 2 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 2 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 2 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 3 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 3 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 3 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 3 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 4 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 4 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 4 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 4 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 5 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 5 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 5 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 5 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 6 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 6 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 6 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 6 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 7 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 7 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 7 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 7 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 8 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 8 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 8 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 8 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 9 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 9 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 9 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 9 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 10 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 10 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 10 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 10 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 11 ORAL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 11 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 1 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

//TODOS LOS ACEPTADOS MESA 11 CARTEL DEL CONGRESO
//$sql=mysql_query("SELECT usuarios.userid, usuarios.nombre, titulo, tag, tags, archivo_extenso FROM trabajos
//                  INNER JOIN usuarios ON trabajos.usuarios_userid = usuarios.userid 
//                  INNER JOIN eje ON trabajos.ejeid = eje.ejeid
//                  INNER JOIN tipo_trabajo ON trabajos.tipo_trabajoid = tipo_trabajo.tipo_trabajoid 
//                  WHERE eje.ejeid = 11 AND status_trabajoid = 2 AND tipo_trabajo.tipo_trabajoid  = 2 AND archivo_extenso = archivo_extenso ORDER BY userid DESC");

$cont=0;
while($res=mysql_fetch_array($sql)){    

  $contador=$count++;
  $codigo=$res["userid"];
  $nombre=$res["nombre"];
  $md5=$res["tag"];
  $mesa=$res["tag1"]

?>  
 <tr>
    <td><?php echo utf8_decode($contador); ?></td>
    <td><?php echo utf8_decode($codigo); ?></td>
    <td><?php echo utf8_decode($nombre); ?></td>
    <td><?php echo utf8_decode($md5); ?></td>
    <td><?php echo utf8_decode($mesa); ?></td> 
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>