<?php
if ($_GET["op"]==1){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='foroenemorelia@gmail.com';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_alumno_p"]  .  '] - ' . " Aclaración de Registro";
    $mensaje=$_POST["mensaje_alumno_p"];
    $para =$_POST["para_alumno_p"];
    $cabeceras = 'From: Soporte Colegios Motolinia <foroenemorelia@gmail.com>' . "\r\n" .
       // 'Reply-To: foroenemorelia@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../folio");

}else if ($_GET["op"]==2){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='foroenemorelia@gmail.com';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_estudiante_p"]  .  '] - ' . " Aclaración de Registro";
    $mensaje=$_POST["mensaje_estudiante_p"];
    $para =$_POST["para_estudiante_p"];
    $cabeceras = 'From: Soporte Colegios Motolinia <foroenemorelia@gmail.com>' . "\r\n" .
       // 'Reply-To: foroenemorelia@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../folio");
}else if ($_GET["op"]==3){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='foroenemorelia@gmail.com';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_tutora_p"]  .  '] - ' . " Aclaración de Registro";
    $mensaje=$_POST["mensaje_tutora_p"];
    $para =$_POST["para_tutora_p"];
    $cabeceras = 'From: Soporte Colegios Motolinia <foroenemorelia@gmail.com>' . "\r\n" .
       // 'Reply-To: foroenemorelia@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../folio");
}else if ($_GET["op"]==4){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='foroenemorelia@gmail.com';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_asistente_p"]  .  '] - ' . " Aclaración de Registro";
    $mensaje=$_POST["mensaje_asistente_p"];
    $para =$_POST["para_asistente_p"];
    $cabeceras = 'From: Soporte Colegios Motolinia <foroenemorelia@gmail.com>' . "\r\n" .
       // 'Reply-To: foroenemorelia@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../folio");
}else{
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='foroenemorelia@gmail.com';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_normalista_p"]  .  '] - ' . " Aclaración de Registro";
    $mensaje=$_POST["mensaje_normalista_p"];
    $para =$_POST["para_normalista_p"];
    $cabeceras = 'From: Soporte Colegios Motolinia <foroenemorelia@gmail.com>' . "\r\n" .
       // 'Reply-To: foroenemorelia@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../folio");
}
?>