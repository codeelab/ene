<?php
include('conf.php');
require "includes/PHPMailerAutoload.php";
require("includes/class.phpmailer.php");
require('fpdf/fpdf.php');
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
if(isset($_POST["procedencia"])){$procedencia = strip_tags($_POST["procedencia"]); }else $procedencia="Participante";
if(isset($_POST["acepto"])){$acepto = strip_tags($_POST["acepto"]); }else $acepto='No';
if(isset($_POST["entrego"])){$entrego = strip_tags($_POST["entrego"]); }else $entrego='No';
$material=0;
$status=0;
$aviso=0;
$costo = '1200';


//REGISTRO CON CORREO ALUMNO ENE

$sql="INSERT INTO publico(nombre, a_paterno, a_materno, matricula, soy, procedencia, taller, medio, acepto, c_personal, tipo, costo, material, entrego, aviso, status) values ('".$nombre."','".$a_paterno."','".$a_materno."','".$matricula."','Asistente','".$procedencia."','".$taller."','".$medio."','".$acepto."','".$c_personal."',4,'".$costo."','".$material."','".$entrego."','".$aviso."',".$status.")";

    $sentenciaCupo="SELECT cupo FROM taller WHERE id_taller='".$taller."'";
    $consultaCupo = mysql_query($sentenciaCupo);
    $Cupo = mysql_fetch_row($consultaCupo);

    if($Cupo[0]>0)
    {

      mysql_query("UPDATE taller SET cupo  = cupo - 1 WHERE id_taller='".$taller."'");

      mysql_query($sql);

      $solicitud = mysql_insert_id();

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
       $pdf->Image('../assets/img/imprimir.jpg',0,0,210,300);
       $pdf->SetFont('Times','B',11);
       $pdf->Image('../assets/img/pdf_logo.jpeg',5,35,100,15);
       $pdf->ln(40);
       $pdf->Cell(0,5,utf8_decode("Morelia, Michoacán a ").date("d") . " de " . $mes . " de " . date("Y"),0,1,'R');
       $pdf->ln(11);
       $pdf->SetFont('Times','B',13);
       $pdf->Cell(0,5,utf8_decode("Estimado(a): ".$nombre.' '.$a_paterno.' '.$a_materno),0,1,'L');
       $pdf->Cell(0,5,utf8_decode("Correo: ".$c_personal),0,1,'L');
       $pdf->Cell(0,5,utf8_decode("Tipo de inscripción: Participante"),0,1,'L');
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
       $pdf->MultiCell(0,5,utf8_decode("Monto a pagar: $".$costo));
       $pdf->ln(10);
       $fecha= date('Y');
       $pdflisto = $pdf->Output("","S");

date_default_timezone_set('Etc/UTC');
$mail = new PHPMailer;
$mail->isSMTP();
//$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'mail.foroene.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "contacto@foroene.com";
$mail->Password = "enemorelia2017";
$mail->From = "contacto@foroene.com";
$mail->FromName = "ENE MORELIA";
$mail->AddAddress("$c_personal");
$mail->addCC("foroenemorelia@gmail.com");
$mail->Timeout=120;
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';
$mail->Subject = "[FNEP2017-"  .  $solicitud  . ' ]: ' . $foro . " ";
$body="<html><body bgcolor='#FFF' style='font-family: Verdana, Geneva, sans-serif; color:#000000; font-size:13px; line-height:21px'><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td><table width='600' border='0' cellspacing='0' cellpadding='0' bgcolor='#FFFFFF' align='center'><tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td width='393'><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr></tr></table></td></tr></table></td></tr><tr><td align='left'><a href= 'http://enemorelia.edu.mx/' target='_blank'><img src='http://foroene.com/assets/img/enemorelia.jpeg' alt='  border='0' style='max-width: 100%; margin-left: 50px;'/></a></td></tr><tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td width='10%'>&nbsp;</td><td width='80%' align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td>&nbsp;</td></tr><tr><td align='left' valign='top'><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td width='95%'><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td height='35' align='left' valign='middle' style='border-bottom:1px dashed #000000'><p style='font-family: Georgia, 'Times New Roman', Times, serif; color:#000000; font-size:25px'><strong>Estimado: <em>$nombre  $a_paterno $a_materno </strong><br><strong>Correo: </strong>$c_personal<br><strong>Tipo de inscripción: </strong> Participante</p></td></tr><tr><td align='left' valign='top'><p >Le informamos que a partir de la emisión del presente correo dispone de 48 horas para:<br><ol><li>Realizar su pago en el banco indicado.</li>
<li>Enviar el comprobante de pago escaneado en formato PDF al correo: foroenemorelia@gmail.com, anexando su Folio y Nombre completo. </li>
<li>Después de 48 horas su registro será cancelado.</li></ol><br><b><center>Folio de registro No.: FNEP2017- $solicitud </center></b><br>REGLAS DE PAGO OBLIGATORIOS, NO HAY EXCEPCIONES:<br><ol><li>El pago debe ser realizado de la siguiente formas:
<ul>
<li>Ventanilla Bancomer.</li>
<li>Transferencia electrónica Bancomer a Bancomer.</li>
<li>Transferencia interbancaria de otros bancos, con cuenta “clabe”.</li>
<li>Cajero Bancomer.</li></ul>
<li>Solo se aceptan pagos <b>INDIVIDUALES.</b></li>
<li>No se aceptan pagos <b>GRUPALES.</b></li>
</ol><br>DATOS DE PAGO:<br>Para pagos en Banco Bancomer:<br>
Número de cuenta (pago en ventanilla): 0453006026<br>
Número de cuenta “clabe” (interbancaria): 012470004530060260<br>
Monto a pagar: $ $costo
</p></td></tr><tr><td><br/><br/></td></tr><tr><td><center><p><strong>A T E N T A M E N T E</strong> <br><br> ESCUELA NORMAL PARA EDUCADORAS DE MORELIA</p></center><br/></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr><tr></tr><tr><td><hr></td></tr><tr></tr><tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr></table></td></tr><tr></tr><tr><td align='center'><p>Av Siervo de La Nacion # Col. Sentimientos de la Naci&oacute;n, Cp. 58178  Morelia Michoac&aacute;n M&eacute;xico Tel.01 443 316 40 48</p></td></tr><tr><td>&nbsp;</td></tr></table></td></tr></table></body></html>";
$mail->addStringAttachment($pdflisto,"FNEP".$fecha."-".$solicitud.".pdf");
$mail->Body = $body;
$mail->AltBody = "Foro Nacional de Educación Preescolar 2017";
$exito = $mail->Send();
}else
    {
        echo 'Oops!, Por el momento no contamos con espacios disponibles, intente más tarde o elija otro taller.';
    }
    //header("Location: ../pdf");
?>