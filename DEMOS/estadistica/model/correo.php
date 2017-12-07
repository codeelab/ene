<?php
if ($_GET["op"]==1){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='soporte@colegiosmotolinia.edu.mx';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_alumno"]  .  '] - ' . " Confirmación de Pago";
    $mensaje=$_POST["mensaje_alumno"];
    $para =$_POST["para_alumno"];
    $cabeceras = 'From: Soporte Colegios Motolinia <soporte@colegiosmotolinia.edu.mx>' . "\r\n" .
       // 'Reply-To: soporte@colegiosmotolinia.edu.mx' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
     header ("Location: ../lib/actualizar.php?id=".$_POST["id_publico_alumno"]."");
}else if ($_GET["op"]==2){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='soporte@colegiosmotolinia.edu.mx';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_estudiante"]  .  '] - ' . " Confirmación de Pago";
    $mensaje=$_POST["mensaje_estudiante"];
    $para =$_POST["para_estudiante"];
    $cabeceras = 'From: Soporte Colegios Motolinia <soporte@colegiosmotolinia.edu.mx>' . "\r\n" .
       // 'Reply-To: soporte@colegiosmotolinia.edu.mx' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
     header ("Location: ../lib/actualizar.php?id=".$_POST["id_publico_estudiante"]."");
}else if ($_GET["op"]==3){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='soporte@colegiosmotolinia.edu.mx';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_tutora"]  .  '] - ' . " Confirmación de Pago";
    $mensaje=$_POST["mensaje_tutora"];
    $para =$_POST["para_tutora"];
    $cabeceras = 'From: Soporte Colegios Motolinia <soporte@colegiosmotolinia.edu.mx>' . "\r\n" .
       // 'Reply-To: soporte@colegiosmotolinia.edu.mx' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
     header ("Location: ../lib/actualizar.php?id=".$_POST["id_publico_tutora"]."");
}else{
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='soporte@colegiosmotolinia.edu.mx';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_asistente"]  .  '] - ' . " Confirmación de Pago";
    $mensaje=$_POST["mensaje_asistente"];
    $para =$_POST["para_asistente"];
    $cabeceras = 'From: Soporte Colegios Motolinia <soporte@colegiosmotolinia.edu.mx>' . "\r\n" .
       // 'Reply-To: soporte@colegiosmotolinia.edu.mx' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
     header ("Location: ../lib/actualizar.php?id=".$_POST["id_publico_asistente"]."");
}
?>