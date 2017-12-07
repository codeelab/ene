<?php
header("Content-Type: text/html;charset=utf-8");
require('lib/config.php');
$link = Conectarse();
mysql_query("SET NAMES 'utf8'");
$updatePro = mysql_query("SELECT * FROM usuarios LIMIT 1");
$costo = mysql_query("SELECT * FROM costos");
$menu = mysql_query("SELECT * FROM menu ORDER BY orden");
$ListTaller = mysql_query("SELECT id_taller, nombres, cupo FROM taller");
$talleres = mysql_query("SELECT id_taller, nombres, cupo FROM taller WHERE cupo >0");
$ponente = mysql_query("SELECT * FROM ponentes ORDER BY id_ponente DESC LIMIT 4",$link);
$ponentes = mysql_query("SELECT * FROM ponentes ORDER BY id_ponente ASC",$link);
$institucion = mysql_query("SELECT * FROM escuela",$link);
$tutora = mysql_query("SELECT nombre, a_paterno, a_materno FROM tutoras");
$alumnos = mysql_query("SELECT * FROM matricula");
$perfil =  mysql_query("SELECT * FROM usuarios ORDER BY id",$link);
$profile = mysql_query("SELECT avatar, nombre FROM usuarios ORDER BY id DESC LIMIT 10",$link);
$correo_reg = mysql_query("SELECT * FROM publico ORDER BY id_publico DESC",$link);
$registro = mysql_query("SELECT * FROM taller",$link);
$medio = mysql_query("SELECT * FROM medios");
$listado=  mysql_query("SELECT  id_publico, nombre, a_paterno,a_materno, tipo, status, fecha FROM publico WHERE status=0 ORDER BY id_publico DESC LIMIT 5",$link);
$usuarios = mysql_query("SELECT * FROM usuarios ORDER BY id DESC");
$escuela=  mysql_query("SELECT id_institucion, nombre_ins FROM institucion");
$total = "SELECT * FROM publico";
$total_ins = "SELECT DISTINCT c_personal FROM publico";
$ultimo = "SELECT * FROM publico ORDER BY id_publico DESC";
$pago = "SELECT status FROM publico WHERE (status='1')";
$money_gral = mysql_query("SELECT SUM(costo) AS total FROM publico WHERE status = 1",$link);
$money_grale = mysql_query("SELECT SUM(costo) AS total FROM publico WHERE status = 1",$link);
$money_alumnas = mysql_query("SELECT SUM(costo) AS total FROM publico WHERE status = 1 AND soy = 'Alumno'",$link);
$money_estudiantes = mysql_query("SELECT SUM(costo) AS total FROM publico WHERE status = 1 AND soy = 'Estudiante'",$link);
$money_tutoras = mysql_query("SELECT SUM(costo) AS total FROM publico WHERE status = 1 AND soy = 'Tutora'",$link);
$money_asistentes = mysql_query("SELECT SUM(costo) AS total FROM publico WHERE status = 1 AND soy = 'Asistente'",$link);

$radio = "SELECT medio FROM publico WHERE medio='1' AND status = 1";
$periodico = "SELECT medio FROM publico WHERE medio='2' AND status = 1";
$web = "SELECT medio FROM publico WHERE medio='3' AND status = 1";
$redes = "SELECT medio FROM publico WHERE medio='4' AND status = 1";
$familia = "SELECT medio FROM publico WHERE medio='5' AND status = 1";
$amigos = "SELECT medio FROM publico WHERE medio='6' AND status = 1";
$normal = "SELECT medio FROM publico WHERE medio='7' AND status = 1";
$trabajo = "SELECT medio FROM publico WHERE medio='8' AND status = 1";
$poster = "SELECT medio FROM publico WHERE medio='9' AND status = 1";
$triptico = "SELECT medio FROM publico WHERE medio='10' AND status = 1";
$medios = "SELECT count(medio), medios.nombre_medio FROM publico INNER JOIN medios ON publico.medio = medios.id_medio WHERE status = 1 GROUP BY medio DESC";


$pendiente = "SELECT status FROM publico WHERE (status='0')";
$cancelado = "SELECT status FROM publico WHERE (status='2')";
$eliminado = "SELECT status FROM publico WHERE (status='3')";
$material = "SELECT material FROM publico WHERE (material='1')";
$materialNo = "SELECT material FROM publico WHERE material=0 AND status=1";
$repetidos = "SELECT c_personal, COUNT(c_personal) FROM publico GROUP BY c_personal HAVING COUNT(c_personal)>1";
$materialPa = "SELECT material FROM publico WHERE status=1 AND material=0";
$folio = mysql_query("SELECT MAX(id_publico) AS id FROM publico");
$events = mysql_query("SELECT nombres, cupo FROM taller ORDER BY cupo <= 0 ");
$events2 = mysql_query("SELECT * FROM taller LIMIT 4");

$taller = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '1') LIMIT 1");
$taller1 = "SELECT taller FROM publico WHERE taller = 1 AND status = 1";
$cupo = mysql_query("SELECT cupo FROM taller WHERE id_taller = 1");

$taller2 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '2') LIMIT 1");
$taller3 = "SELECT taller FROM publico WHERE taller = 2 AND status = 1";
$cupo1 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '2')");

$taller4 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '3') LIMIT 1");
$taller5 = "SELECT taller FROM publico WHERE taller = 3 AND status = 1";
$cupo2 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '3')");

$taller6 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '4') LIMIT 1");
$taller7 = "SELECT taller FROM publico WHERE taller = 4 AND status = 1";
$cupo3 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '4')");

$taller8 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '5') LIMIT 1");
$taller9 = "SELECT taller FROM publico WHERE taller = 5 AND status = 1";
$cupo4 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '5')");

$taller10 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '6') LIMIT 1");
$taller11 = "SELECT taller FROM publico WHERE taller = 6 AND status = 1";
$cupo5 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '6')");

$taller12 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '7') LIMIT 1");
$taller13 = "SELECT taller FROM publico WHERE taller = 7 AND status = 1";
$cupo6 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '7')");

$taller14 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '8') LIMIT 1");
$taller15 = "SELECT taller FROM publico WHERE taller = 8 AND status = 1";
$cupo7 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '8')");

$taller16 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '9') LIMIT 1");
$taller17 = "SELECT taller FROM publico WHERE taller = 9 AND status = 1";
$cupo8 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '9')");

$taller18 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '10') LIMIT 1");
$taller19 = "SELECT taller FROM publico WHERE taller = 10 AND status = 1";
$cupo9 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '10')");

$taller20 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '11') LIMIT 1");
$taller21 = "SELECT taller FROM publico WHERE taller = 11 AND status = 1";
$cupo10 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '11')");

$taller22 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '12') LIMIT 1");
$taller23 = "SELECT taller FROM publico WHERE taller = 12 AND status = 1";
$cupo11 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '12')");

$taller24 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '13') LIMIT 1");
$taller25 = "SELECT taller FROM publico WHERE taller = 13 AND status = 1";
$cupo12 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '13')");

$taller26 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '14') LIMIT 1");
$taller27 = "SELECT taller FROM publico WHERE taller = 14 AND status = 1";
$cupo13 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '14')");

$taller28 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '15') LIMIT 1");
$taller29 = "SELECT taller FROM publico WHERE taller = 15 AND status = 1";
$cupo14 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '15')");

$taller30 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '16') LIMIT 1");
$taller31 = "SELECT taller FROM publico WHERE taller = 16 AND status = 1";
$cupo15 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '16')");

$taller32 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '17') LIMIT 1");
$taller33 = "SELECT taller FROM publico WHERE taller = 17 AND status = 1";
$cupo16 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '17')");

$taller34 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '18') LIMIT 1");
$taller35 = "SELECT taller FROM publico WHERE taller = 18 AND status = 1";
$cupo17 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '18')");

$taller36 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '19') LIMIT 1");
$taller37 = "SELECT taller FROM publico WHERE taller = 19 AND status = 1";
$cupo18 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '19')");

$taller38 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '20') LIMIT 1");
$taller39 = "SELECT taller FROM publico WHERE taller = 20 AND status = 1";
$cupo19 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '20')");

$taller40 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '21') LIMIT 1");
$taller41 = "SELECT taller FROM publico WHERE taller = 21 AND status = 1";
$cupo20 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '21')");

$taller42 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '22') LIMIT 1");
$taller43 = "SELECT taller FROM publico WHERE taller = 22 AND status = 1";
$cupo21 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '22')");

$taller44 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '23') LIMIT 1");
$taller45 = "SELECT taller FROM publico WHERE taller = 23 AND status = 1";
$cupo22 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '23')");

$taller46 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '24') LIMIT 1");
$taller47 = "SELECT taller FROM publico WHERE taller = 24 AND status = 1";
$cupo23 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '24')");

$taller48 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '25') LIMIT 1");
$taller49 = "SELECT taller FROM publico WHERE taller = 25 AND status = 1";
$cupo24 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '25')");

$taller50 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '26') LIMIT 1");
$taller51 = "SELECT taller FROM publico WHERE taller = 26 AND status = 1";
$cupo25 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '26')");

$taller52 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '27') LIMIT 1");
$taller53 = "SELECT taller FROM publico WHERE taller = 27 AND status = 1";
$cupo26 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '27')");

$taller54 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '28') LIMIT 1");
$taller55 = "SELECT taller FROM publico WHERE taller = 28 AND status = 1";
$cupo27 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '28')");

$taller56 = mysql_query("SELECT nombres FROM taller WHERE (id_taller = '29') LIMIT 1");
$taller57 = "SELECT taller FROM publico WHERE taller = 29 AND status = 1";
$cupo28 = mysql_query("SELECT cupo FROM taller WHERE (id_taller = '29')");




$verifica =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, fecha, t.nombres, tipo, material, aviso, status, costo, referencia_pago FROM publico INNER JOIN taller t ON publico.taller = t.id_taller GROUP BY id_publico DESC",$link);

$folios =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, referencia_pago, fecha, material, tipo, aviso, status FROM publico WHERE (status='0') ORDER BY id_publico DESC",$link);

$bajas =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, referencia_pago, fecha, material, tipo, aviso, status FROM publico WHERE (status='3') ORDER BY id_publico DESC",$link);

$folios_cancelados =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, fecha, tipo, material, aviso, status, taller FROM publico  WHERE status=2  GROUP BY id_publico DESC",$link);

$folios_registros =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, fecha, t.nombres, tipo, material, aviso, status, costo, referencia_pago FROM publico INNER JOIN taller t ON publico.taller = t.id_taller WHERE status = 1 AND material = 0 GROUP BY id_publico DESC",$link);

$folios_entregados =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, fecha, solucion, acepto, tipo, material, entrego, aviso, status FROM publico WHERE status = 1 AND material = 1 GROUP BY id_publico DESC",$link);

$folios_deposito =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, costo, referencia_pago, tipo, status FROM publico WHERE (status='0') ORDER BY id_publico DESC",$link);

$Npagado =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, tipo, material, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (status='0') ORDER BY id_publico DESC",$link);

$pagado =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (status='1') ORDER BY id_publico DESC",$link);
$cancelados =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (status='2') ORDER BY id_publico DESC",$link);
$papelera =  mysql_query("SELECT id_basura, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, acepto, status FROM basura INNER JOIN taller ON basura.taller = taller.id_taller ORDER BY id_basura DESC",$link);
$materialesNo =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (material='0') ORDER BY id_publico DESC",$link);
$materiales =  mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (material='1') ORDER BY id_publico DESC",$link);

$uno =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 1 GROUP BY id_publico DESC",$link);

$dos =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 2 GROUP BY id_publico DESC",$link);

$tres =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 3 GROUP BY id_publico DESC",$link);

$cuatro =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 4 GROUP BY id_publico DESC",$link);

$cinco =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 5 GROUP BY id_publico DESC",$link);

$seis =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 6 GROUP BY id_publico DESC",$link);

$siete =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 7 GROUP BY id_publico DESC",$link);

$ocho =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 8 GROUP BY id_publico DESC",$link);

$nueve =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 9 GROUP BY id_publico DESC",$link);

$diez =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 10 GROUP BY id_publico DESC",$link);

$once =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 11 GROUP BY id_publico DESC",$link);

$doce =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 12 GROUP BY id_publico DESC",$link);

$trece =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 13 GROUP BY id_publico DESC",$link);

$catorce =  mysql_query("SELECT DISTINCT id_publico, fecha, tipo, nombre, a_paterno, a_materno, c_personal, matricula, procedencia, taller FROM publico WHERE taller = 14 GROUP BY id_publico DESC",$link);

$alumnas = "SELECT soy FROM publico WHERE (soy='Alumno')";
$estudiante = "SELECT soy FROM publico WHERE (soy='Estudiante')";
$tutora = "SELECT soy FROM publico WHERE (soy='Tutora')";
$asistente = "SELECT soy FROM publico WHERE (soy='Asistente')";

$alumna = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status, costo FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (soy='Alumno') ORDER BY id_publico DESC",$link);

$estudiantes = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status, costo FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (soy='Estudiante') ORDER BY id_publico DESC",$link);

$tutoras = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, institucion.nombre_ins, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, costo, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller INNER JOIN institucion ON publico.procedencia = institucion.id_institucion WHERE (soy='Tutora') ORDER BY id_publico DESC",$link);

$asistentes = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, costo, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (soy='Asistente') ORDER BY id_publico DESC",$link);

$alumnas_pago = "SELECT status FROM publico WHERE status=1 AND soy='Alumno'";
$alumnas_pago_pendientes = "SELECT * FROM matricula";
$alumnas_no_pagado = "SELECT * FROM publico WHERE soy='Alumno' AND status=0";
$estudiante_pago = "SELECT status FROM publico WHERE status=1 AND soy='Estudiante'";
$tutora_pago = "SELECT status FROM publico WHERE status=1 AND soy='Tutora'";
$tutora_pago_pendientes = "SELECT * FROM tutoras";
$tutora_no_pagado = "SELECT * FROM publico WHERE soy='Tutora' AND status=0";
$asistente_pago = "SELECT status FROM publico WHERE status=1 AND soy='Asistente'";

$alumna_pago = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status, costo, referencia_pago FROM publico INNER JOIN taller ON publico.taller = taller.id_taller  WHERE (status='1') AND (soy='Alumno') ORDER BY id_publico DESC",$link);

$estudiantes_pago = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, fecha, costo, referencia_pago, tipo, material, aviso, acepto, status FROM publico WHERE (status='1') AND (soy='Estudiante') ORDER BY id_publico DESC",$link);

$tutoras_pago = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, institucion.nombre_ins, c_personal, medio, fecha, costo, referencia_pago, tipo, material, aviso, acepto, status FROM publico INNER JOIN institucion ON publico.procedencia = institucion.id_institucion WHERE status=1 AND (soy='Tutora') ORDER BY id_publico DESC",$link);

$asistentes_pago = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, fecha, costo, referencia_pago, tipo, material, aviso, acepto, status FROM publico WHERE (status='1') AND (soy='Asistente') ORDER BY id_publico DESC",$link);

$alumnas_pendiente = "SELECT status FROM publico WHERE (status='0') AND (soy='Alumno')";
$estudiante_pendiente = "SELECT status FROM publico WHERE (status='0') AND (soy='Estudiante')";
$tutora_pendiente = "SELECT status FROM publico WHERE (status='0') AND (soy='Tutora')";
$asistente_pendiente = "SELECT status FROM publico WHERE (status='0') AND (soy='Asistente')";

$alumna_pendiente = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (status='0') AND (soy='Alumno') ORDER BY id_publico DESC",$link);

$estudiantes_pendiente = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (status='0') AND (soy='Estudiante') ORDER BY id_publico DESC",$link);

$tutoras_pendiente = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (status='0') AND (soy='Tutora') ORDER BY id_publico DESC",$link);

$asistentes_pendiente = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (status='0') AND (soy='Asistente') ORDER BY id_publico DESC",$link);

$alumnas_cancelado = "SELECT status FROM publico WHERE (status='2') AND (soy='Alumno')";
$estudiante_cancelado = "SELECT status FROM publico WHERE (status='2') AND (soy='Estudiante')";
$tutora_cancelado = "SELECT status FROM publico WHERE (status='2') AND (soy='Tutora')";
$asistente_cancelado = "SELECT status FROM publico WHERE (status='2') AND (soy='Asistente')";

$alumna_cancelado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (status='2') AND (soy='Alumno') ORDER BY id_publico DESC",$link);

$estudiantes_cancelado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (status='2') AND (soy='Estudiante') ORDER BY id_publico DESC",$link);

$tutoras_cancelado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, institucion.nombre_ins, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller INNER JOIN institucion ON publico.procedencia = institucion.id_institucion WHERE status=2 AND soy='Tutora' ORDER BY id_publico DESC",$link);

$asistentes_cancelado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (status='2') AND (soy='Asistente') ORDER BY id_publico DESC",$link);


$alumnas_eliminado = "SELECT * FROM publico WHERE status = 3 AND soy='Alumno'";
$estudiante_eliminado = "SELECT * FROM publico WHERE status = 3 AND soy='Estudiante'";
$tutora_eliminado = "SELECT * FROM publico WHERE status = 3 AND soy='Tutora'";
$asistente_eliminado = "SELECT * FROM publico WHERE status = 3 AND soy='Asistente'";

$alumna_eliminado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE status = 3 AND (soy='Alumno') ORDER BY id_publico DESC",$link);

$estudiantes_eliminado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE status = 3 AND (soy='Estudiante') ORDER BY id_publico DESC",$link);

$tutoras_eliminado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula,institucion.nombre_ins, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller INNER JOIN institucion ON publico.procedencia = institucion.id_institucion WHERE status = 3 AND (soy='Tutora') ORDER BY id_publico DESC",$link);

$asistentes_eliminado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE status = 3 AND (soy='Asistente') ORDER BY id_publico DESC",$link);

$alumnas_entregado = "SELECT * FROM publico WHERE (material='1') AND (soy='Alumno')";
$estudiante_entregado = "SELECT * FROM publico WHERE (material='1') AND (soy='Estudiante')";
$tutora_entregado = "SELECT * FROM publico WHERE (material='1') AND (soy='Tutora')";
$asistente_entregado = "SELECT * FROM publico WHERE (material='1') AND (soy='Asistente')";

$alumna_entregado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (material='1') AND (soy='Alumno') ORDER BY id_publico DESC",$link);

$estudiantes_entregado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (material='1') AND (soy='Estudiante') ORDER BY id_publico DESC",$link);

$tutoras_entregado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (material='1') AND (soy='Tutora') ORDER BY id_publico DESC",$link);

$asistentes_entregado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (material='1') AND (soy='Asistente') ORDER BY id_publico DESC",$link);

$normalista_entregado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE (material='1') AND (soy='Normalista') ORDER BY id_publico DESC",$link);

$alumnas_no_entregado = "SELECT * FROM publico WHERE material=0 AND status=1 AND soy='Alumno'";
$estudiante_no_entregado = "SELECT * FROM publico WHERE material=0 AND status=1 AND (soy='Estudiante')";
$tutora_no_entregado = "SELECT * FROM publico WHERE material=0 AND status=1 AND (soy='Tutora')";
$asistente_no_entregado = "SELECT * FROM publico WHERE material=0 AND status=1 AND (soy='Asistente')";
$normalista_no_entregado = "SELECT * FROM publico WHERE material=0 AND status=1 AND (soy='Normalista')";

$alumna_no_entregado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status, referencia_pago FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE material=0 AND status=1 AND (soy='Alumno') ORDER BY id_publico DESC",$link);

$estudiantes_no_entregado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status, referencia_pago FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE material=0 AND status=1 AND (soy='Estudiante') ORDER BY id_publico DESC",$link);

$tutoras_no_entregado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, institucion.nombre_ins, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status, referencia_pago FROM publico INNER JOIN taller ON publico.taller = taller.id_taller INNER JOIN institucion ON publico.procedencia = institucion.id_institucion WHERE material=0 AND status=1  AND (soy='Tutora') ORDER BY id_publico DESC",$link);

$asistentes_no_entregado = mysql_query("SELECT id_publico, nombre, a_paterno, a_materno, soy, matricula, procedencia, c_personal, medio, taller.nombres, fecha, solucion, tipo, material, aviso, acepto, status, referencia_pago FROM publico INNER JOIN taller ON publico.taller = taller.id_taller WHERE material=0 AND status=1  AND (soy='Asistente') ORDER BY id_publico DESC",$link);

while($reg = mysql_fetch_array($institucion)){
    $nombre_corto = mb_convert_encoding($reg['nombre_corto'], "UTF-8");
    $nombre_completo = mb_convert_encoding($reg['nombre_completo'], "UTF-8");
    $direccion = mb_convert_encoding($reg['direccion'], "UTF-8");
    $colonia = mb_convert_encoding($reg['colonia'], "UTF-8");
    $telefono = mb_convert_encoding($reg['telefono1'], "UTF-8");
    $telefonos = mb_convert_encoding($reg['telefono2'], "UTF-8");
    $convocatoria = mb_convert_encoding($reg['convocatoria'], "UTF-8");
    $instagram = mb_convert_encoding($reg['instagram'], "UTF-8");
    $youtube = mb_convert_encoding($reg['youtube'], "UTF-8");
    $facebook = mb_convert_encoding($reg['facebook'], "UTF-8");
    $twitter = mb_convert_encoding($reg['twitter'], "UTF-8");
}
?>