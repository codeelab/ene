<?php
if ($_GET["op"]==1){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='soporte@colegiosmotolinia.edu.mx';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_alumno_c"]  .  '] - ' . " Cancelación de Registro";
    $mensaje=$_POST["mensaje_alumno_c"];
    $para =$_POST["para_alumno_c"];
    $cabeceras = 'From: Soporte Colegios Motolinia <soporte@colegiosmotolinia.edu.mx>' . "\r\n" .
       // 'Reply-To: soporte@colegiosmotolinia.edu.mx' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../lib/actualizar_cancelacion.php?id=".$_POST["id_publico_alumno_c"]."");

}else if ($_GET["op"]==2){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='soporte@colegiosmotolinia.edu.mx';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_estudiante_c"]  .  '] - ' . " Cancelación de Registro";
    $mensaje=$_POST["mensaje_estudiante_c"];
    $para =$_POST["para_estudiante_c"];
    $cabeceras = 'From: Soporte Colegios Motolinia <soporte@colegiosmotolinia.edu.mx>' . "\r\n" .
       // 'Reply-To: soporte@colegiosmotolinia.edu.mx' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../lib/actualizar_cancelacion.php?id=".$_POST["id_publico_estudiante_c"]."");
}else if ($_GET["op"]==3){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='soporte@colegiosmotolinia.edu.mx';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_tutora_c"]  .  '] - ' . " Cancelación de Registro";
    $mensaje=$_POST["mensaje_tutora_c"];
    $para =$_POST["para_tutora_c"];
    $cabeceras = 'From: Soporte Colegios Motolinia <soporte@colegiosmotolinia.edu.mx>' . "\r\n" .
       // 'Reply-To: soporte@colegiosmotolinia.edu.mx' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../lib/actualizar_cancelacion.php?id=".$_POST["id_publico_tutora_c"]."");
}else{
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='soporte@colegiosmotolinia.edu.mx';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_asistente_c"]  .  '] - ' . " Cancelación de Registro";
    $mensaje=$_POST["mensaje_asistente_c"];
    $para =$_POST["para_asistente_c"];
    $cabeceras = 'From: Soporte Colegios Motolinia <soporte@colegiosmotolinia.edu.mx>' . "\r\n" .
       // 'Reply-To: soporte@colegiosmotolinia.edu.mx' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../lib/actualizar_cancelacion.php?id=".$_POST["id_publico_asistente_c"]."");
}
?>