<?php
include('lib/conf.php');
require "lib/includes/PHPMailerAutoload.php";
require('lib/fpdf/fpdf.php');
$conexion = mysql_connect($host , $username , $password);
mysql_select_db($db_name,$conexion);
mysql_query("SET NAMES 'utf8'");
$foro = 'Foro Nacional de Educación Preescolar '.date('Y').'';
date_default_timezone_set('America/Mexico_City');
$fec = date('d/m/Y g:ia');

if(isset($_POST["nombre"])){$nombre = strip_tags($_POST["nombre"]); }else $nombre='S/N';
if(isset($_POST["a_paterno"])){$a_paterno = strip_tags($_POST["a_paterno"]); }else $a_paterno=' ';
if(isset($_POST["a_materno"])){$a_materno = strip_tags($_POST["a_materno"]); }else $a_materno=' ';
if(isset($_POST["matricula"])){$matricula = $_POST["matricula"]; }else $matricula='S/N';
if(isset($_POST["id_taller"])){$taller = $_POST["id_taller"]; }else $taller='S/N';
if(isset($_POST["medio"])){$medio = $_POST["medio"]; }else $medio='S/N';
if(isset($_POST["c_personal"])){$c_personal = strip_tags($_POST["c_personal"]); }else $c_personal='S/N';
if(isset($_POST["procedencia"])){$procedencia = strip_tags($_POST["procedencia"]); }else $procedencia="S/N";
if(isset($_POST["acepto"])){$acepto = strip_tags($_POST["acepto"]); }else $acepto='No';
if(isset($_POST["entrego"])){$entrego = strip_tags($_POST["entrego"]); }else $entrego='No';
if(isset($_POST["costo"])){$costo = strip_tags($_POST["costo"]); }else $costo='No';


       $mes=date("F");

       if ($mes=="January") $mes="Enero";
       if ($mes=="February") $mes="Febrero";
       if ($mes=="March") $mes="Marzo";
       if ($mes=="April") $mes="Abril";
       if ($mes=="May") $mes="Mayo";
       if ($mes=="June") $mes="Junio";
       if ($mes=="July") $mes="Julio";
       if ($mes=="August") $mes="Agosto";
       if ($mes=="September") $mes="Setiembre";
       if ($mes=="October") $mes="Octubre";
       if ($mes=="November") $mes="Noviembre";
       if ($mes=="December") $mes="Diciembre";

       $pdf=new Fpdf();
       $pdf->AddPage();
       $pdf->Image('assets/img/imprimir.jpg',0,0,210,300);
       $pdf->SetFont('Times','B',11);
       $pdf->Image('assets/img/pdf_logo.jpeg',5,35,100,15);
       $pdf->ln(40);
       $pdf->Cell(0,5,utf8_decode("Morelia, Michoacán a ").date("d") . " de " . $mes . " de " . date("Y"),0,1,'R');
       $pdf->ln(11);
       $pdf->SetFont('Times','B',13);
       $pdf->Cell(0,5,utf8_decode("Estimado(a): ".$nombre.' '.$a_paterno.' '.$a_materno),0,1,'L');
       $pdf->Cell(0,5,utf8_decode("Correo: ".$c_personal),0,1,'L');
       $pdf->Cell(0,5,utf8_decode("Tipo de inscripción: Alumna ENE"),0,1,'L');
       $pdf->ln(5);
       $pdf->SetFont('Times','',13);
       $pdf->MultiCell(0,5,utf8_decode("Le informamos que a partir de la emisión del presente correo dispone de 48 horas para:\n\n"));
       $pdf->MultiCell(0,5,utf8_decode("1.- Realizar su pago en el banco indicado."));
       $pdf->MultiCell(0,5,utf8_decode("2.- Enviar el comprobante de pago escaneado en formato PDF al correo: enemorelia@hotmail.com, anexando su Folio y Nombre completo."));
       $pdf->MultiCell(0,5,utf8_decode("3.- Después de 48 horas su registro será cancelado."));
       $pdf->ln(10);
       $pdf->SetFont('Times','B',13);
       $pdf->Cell(0,15,"Folio de registro No.: FNEP2017-".$solicitud."",0,1,'C');

       $pdf->ln(10);
       $pdf->SetFont('Times','',13);
       $pdf->MultiCell(0,5,utf8_decode("REGLAS DE PAGO OBLIGATORIOS, NO HAY EXCEPCIONES:\n\n"));
       $pdf->MultiCell(0,5,utf8_decode("1. El pago debe ser realizado de la siguiente formas:"));
       $pdf->MultiCell(0,5,utf8_decode("         a. Ventanilla Bancomer."));
       $pdf->MultiCell(0,5,utf8_decode("         b. Transferencia electrónica Bancomer a Bancomer."));
       $pdf->MultiCell(0,5,utf8_decode("         c. Transferencia interbancaria de otros bancos, con cuenta 'clabe'.  "));
       $pdf->MultiCell(0,5,utf8_decode("         d. Cajero Bancomer. "));
       $pdf->MultiCell(0,5,utf8_decode("2. Solo se aceptan pagos INDIVIDUALES."));
       $pdf->MultiCell(0,5,utf8_decode("3. No se aceptan pagos GRUPALES. "));

       $pdf->ln(10);
       $pdf->MultiCell(0,5,utf8_decode("DATOS DE PAGO:\n\n"));
       $pdf->MultiCell(0,5,utf8_decode("Para pagos en Banco Bancomer:"));
       $pdf->MultiCell(0,5,utf8_decode("Número de cuenta (pago en ventanilla): 0453006026"));
       $pdf->MultiCell(0,5,utf8_decode("Número de cuenta 'clabe' (interbancaria): 012470004530060260"));
       $pdf->MultiCell(0,5,utf8_decode("Monto a pagar: ".$costo));

       $pdf->ln(10);
       $pdf->Output();



 ?>