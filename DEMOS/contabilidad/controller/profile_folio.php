<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>Folio</th>
          <th>Ficha</th>
          <th>Nombre</th>
          <th>Solicitud</th>
          <th>Registro</th>
          <th>Estado</th>
          <th>Aviso</th>
          <th>Acción</th>
        </tr>
    </thead>

    <tbody>
<?php
    while($reg=  mysql_fetch_array($folios)){
    $id = $reg['id_publico']; //ID PARA FORM EN POP UP
    $cod=$reg['id_publico']; //ELIMINAR REGISTROS

    if($reg['status']==0){
      $status="<div class='pendiente-adm'></div><span class='label label-default' style='margin: 30%;'> Pendiente</span>";
    }else if($reg['status']==1){
      $status="<div class='pagado-adm'></div><span class='label label-default' style='margin: 30%;'>Pagado</span>";
    }else
      $status="<div class='cancelado-adm'></div><span class='label label-default' style='margin: 30%;'>Cancelado</span>";

    if($reg['material']==0 AND $reg['status']==0){
      $material="<span class='label label-danger' style='margin: 20%;'><i class='fa fa-bookmark-o'></i> No Entregado</span>";
    }else if($reg['status']==1 AND $reg['material']==0){
      $material="<span class='label label-danger' style='margin: 20%;'><i class='fa fa-bookmark-o'></i> No Entregado</span>";
    }else if($reg['status']==2){
      $material="<span class='label label-default' style='margin: 20%;'><i class='fa fa-bookmark'></i> Cancelado </span>";
    }else
      $material="<span class='label label-info' style='margin: 20%;'><i class='fa fa-bookmark'></i> Entregado</span>";

    if($reg['aviso']==0 AND $reg['status']==0){
      $aviso="<span class='label label-warning' style='margin: 20%;'><i class='fa fa-envelope-o'></i>  En Espera</span>";
    }else if($reg['status']==2 AND $reg['aviso']==0){
      $aviso="<span class='label label-default' style='margin: 20%;'><i class='fa fa-envelope'></i>  Cancelado</span>";
    }else if($reg['status']==1){
      $aviso="<span class='label label-primary' style='margin: 20%;'><i class='fa fa-envelope-o'></i>  Pagado</span>";
    }else{
      $aviso="<span class='label label-success' style='margin: 20%;'><i class='fa fa-envelope-o'></i>  Aviso Enviado</span>";
    }

    echo '<tr>';
    echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.mb_convert_encoding($reg['id_publico'], "UTF-8").'</span></td>';
    echo '<td>'.mb_convert_encoding($reg['referencia_pago'], "UTF-8").'</td>';
    echo '<td>'.$reg['nombre'].' '.$reg['a_paterno'].' '.$reg['a_materno'] . '</td>';


if($reg['tipo']==1){
  $tipo="Alumna ENE";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td ><i class="fa fa-clock-o"> '.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($aviso, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td>
        <div>
            <a href="correo_alumno.php?id='.$id.'"><button type="button" class="btn btn-primary btn-circle" value="alumnoEne" title="Confirmación de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_alumno_aviso.php?id='.$id.'"><button type="button" class="btn btn-warning btn-circle" value="alumnoEneAviso" title="Aviso de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_alumno_cancelacion.php?id='.$id.'"><button type="button" class="btn btn-danger btn-circle" value="alumnoEneC" title="Cancelación Folio"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_alumno_personalizado.php?id='.$id.'"><button type="button" class="btn btn-info btn-circle" value="alumnoEneP" title="Mensaje Personalizado"><span class="fa fa-envelope" ></span></button></a>
            <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-default btn-circle" title="Eliminar Registro"><span class="fa fa-remove"></span></button></a>
        </div></td>';
    }else if ($reg['status']==2 AND $reg['material']==0){
        echo '<td>
            <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Habilitar Cancelación"><span class="fa fa-refresh"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
          <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
      </div></td>';
}else if ($reg['tipo']==2){
  $tipo="Estudiante";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td ><i class="fa fa-clock-o"> '.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($aviso, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td>
        <div>
            <a href="correo_estudiante.php?id='.$id.'"><button type="button" class="btn btn-primary btn-circle" value="estudiante" title="Confirmación de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_estudiante_aviso.php?id='.$id.'"><button type="button" class="btn btn-warning btn-circle" value="estudianteA" title="Aviso de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_estudiante_cancelacion.php?id='.$id.'"><button type="button" class="btn btn-danger btn-circle" value="estudianteC" title="Cancelación Folio"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_estudiante_personalizado.php?id='.$id.'"><button type="button" class="btn btn-info btn-circle" value="estudianteP" title="Mensaje Personalizado"><span class="fa fa-envelope" ></span></button></a>
            <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-default btn-circle" title="Eliminar Registro"><span class="fa fa-remove"></span></button></a>
        </div></td>';
    }else if ($reg['status']==2 AND $reg['material']==0){
        echo '<td>
            <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Habilitar Cancelación"><span class="fa fa-refresh"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
          <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
      </div></td>';
}else if ($reg['tipo']==3){
  $tipo="Tutora";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td ><i class="fa fa-clock-o"> '.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($aviso, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td>
        <div>
            <a href="correo_tutora.php?id='.$id.'"><button type="button" class="btn btn-primary btn-circle" value="tutora" title="Confirmación de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_tutora_aviso.php?id='.$id.'"><button type="button" class="btn btn-warning btn-circle" value="tutoraA" title="Aviso de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_tutora_cancelacion.php?id='.$id.'"><button type="button" class="btn btn-danger btn-circle" value="tutoraC" title="Cancelación Folio"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_tutora_personalizado.php?id='.$id.'"><button type="button" class="btn btn-info btn-circle" value="tutoraP" title="Mensaje Personalizado"><span class="fa fa-envelope" ></span></button></a>
            <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-default btn-circle" title="Eliminar Registro"><span class="fa fa-remove"></span></button></a>
        </div></td>';
    }else if ($reg['status']==2 AND $reg['material']==0){
        echo '<td>
            <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Habilitar Cancelación"><span class="fa fa-refresh"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
          <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
      </div></td>';
}else if ($reg['tipo']==4){
   $tipo="Participante";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td ><i class="fa fa-clock-o"> '.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($aviso, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td>
        <div>
            <a href="correo_asistente.php?id='.$id.'"><button type="button" class="btn btn-primary btn-circle" value="asistente" title="Confirmación de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_asistente_aviso.php?id='.$id.'"><button type="button" class="btn btn-warning btn-circle" value="asistenteA" title="Aviso de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_asistente_cancelacion.php?id='.$id.'"><button type="button" class="btn btn-danger btn-circle" value="asistenteC" title="Cancelación Folio"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_asistente_personalizado.php?id='.$id.'"><button type="button" class="btn btn-info btn-circle" value="asistenteP" title="Mensaje Personalizado"><span class="fa fa-envelope" ></span></button></a>
            <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-default btn-circle" title="Eliminar Registro"><span class="fa fa-remove"></span></button></a>
        </div></td>';
    }else if ($reg['status']==2 AND $reg['material']==0){
        echo '<td>
            <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Habilitar Cancelación"><span class="fa fa-refresh"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
          <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
      </div></td>';
}else{
   $tipo="Normalista Foraneo";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td ><i class="fa fa-clock-o"> '.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($aviso, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td>
        <div>
            <a href="correo_normalista.php?id='.$id.'"><button type="button" class="btn btn-primary btn-circle" value="normalista" title="Confirmación de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_normalista_aviso.php?id='.$id.'"><button type="button" class="btn btn-warning btn-circle" value="normalistaA" title="Aviso de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_normalista_cancelacion.php?id='.$id.'"><button type="button" class="btn btn-danger btn-circle" value="normalistaC" title="Cancelación Folio"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_normalista_personalizado.php?id='.$id.'"><button type="button" class="btn btn-info btn-circle" value="normalistaP" title="Mensaje Personalizado"><span class="fa fa-envelope" ></span></button></a>
            <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-default btn-circle" title="Eliminar Registro"><span class="fa fa-remove"></span></button></a>
        </div></td>';
    }else if ($reg['status']==2 AND $reg['material']==0){
        echo '<td>
            <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Habilitar Cancelación"><span class="fa fa-refresh"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
          <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
      </div></td>';
}

}
?>
    </tbody>
</table>