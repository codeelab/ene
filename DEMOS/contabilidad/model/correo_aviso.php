<?php
if ($_GET["op"]==1){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='foroenemorelia@gmail.com';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_alumno_a"]  .  '] - ' . " Aviso de Pago";
    $mensaje=$_POST["mensaje_alumno_a"];
    $para =$_POST["para_alumno_a"];
    $cabeceras = 'From: FORO ENE MORELIA <foroenemorelia@gmail.com>' . "\r\n" .
       // 'Reply-To: foroenemorelia@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../lib/actualizar_aviso.php?id=".$_POST["id_publico_alumno_a"]."");

}else if ($_GET["op"]==2){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='foroenemorelia@gmail.com';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_estudiante_a"]  .  '] - ' . " Aviso de Pago";
    $mensaje=$_POST["mensaje_estudiante_a"];
    $para =$_POST["para_estudiante_a"];
    $cabeceras = 'From: FORO ENE MORELIA <foroenemorelia@gmail.com>' . "\r\n" .
       // 'Reply-To: foroenemorelia@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../lib/actualizar_aviso.php?id=".$_POST["id_publico_estudiante_a"]."");
}else if ($_GET["op"]==3){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='foroenemorelia@gmail.com';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_tutora_a"]  .  '] - ' . " Aviso de Pago";
    $mensaje=$_POST["mensaje_tutora_a"];
    $para =$_POST["para_tutora_a"];
    $cabeceras = 'From: FORO ENE MORELIA <foroenemorelia@gmail.com>' . "\r\n" .
       // 'Reply-To: foroenemorelia@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../lib/actualizar_aviso.php?id=".$_POST["id_publico_tutora_a"]."");
}else if ($_GET["op"]==4){
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='foroenemorelia@gmail.com';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_asistente_a"]  .  '] - ' . " Aviso de Pago";
    $mensaje=$_POST["mensaje_asistente_a"];
    $para =$_POST["para_asistente_a"];
    $cabeceras = 'From: FORO ENE MORELIA <foroenemorelia@gmail.com>' . "\r\n" .
       // 'Reply-To: foroenemorelia@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../lib/actualizar_aviso.php?id=".$_POST["id_publico_asistente_a"]."");
}else{
    //CORREO 1 - CORREO DE SOLUCIÓN A ALUMNO ENE
    $mail='foroenemorelia@gmail.com';
    $asunto='[FNEP'.date('Y').'-'.  $_POST["id_publico_normalista_a"]  .  '] - ' . " Aviso de Pago";
    $mensaje=$_POST["mensaje_normalista_a"];
    $para =$_POST["para_normalista_a"];
    $cabeceras = 'From: FORO ENE MORELIA <foroenemorelia@gmail.com>' . "\r\n" .
       // 'Reply-To: foroenemorelia@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($para, $asunto, $mensaje, $cabeceras);
    header ("Location: ../lib/actualizar_aviso.php?id=".$_POST["id_publico_normalista_a"]."");
}
?>