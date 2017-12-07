<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>Folio</th>
          <th>Nombre</th>
          <th>Solicitud</th>
          <th>Registro</th>
          <th>Estado</th>
          <th>Taller</th>
        </tr>
    </thead>

    <tbody>
<?php
    while($reg=  mysql_fetch_array($verifica)){
    $id = $reg['id_publico']; //ID PARA FORM EN POP UP
    $rec=$reg['id_publico']; //ELIMINAR REGISTROS

    if($reg['status']==0){
      $status="<div class='pendiente-adm'></div><span class='label label-default' style='margin: 30%;'> Pendiente</span>";
    }else if($reg['status']==1){
      $status="<div class='pagado-adm'></div><span class='label label-default' style='margin: 30%;'>Pagado</span>";
    }else if($reg['status']==3){
      $status="<div class='pendiente-adm'></div><span class='label label-default' style='margin: 30%;'>En Baja</span>";
    }else
      $status="<div class='cancelado-adm'></div><span class='label label-default' style='margin: 30%;'>Cancelado</span>";

    if($reg['material']==0 AND $reg['status']==0){
      $material="<span class='label label-danger' style='margin: 20%;'><i class='fa fa-bookmark-o'></i> No Entregado</span>";
    }else if($reg['status']==1 AND $reg['material']==0){
      $material="<span class='label label-danger' style='margin: 20%;'><i class='fa fa-bookmark-o'></i> No Entregado</span>";
    }else if($reg['status']==3){
      $material="<span class='label label-default' style='margin: 20%;'><i class='fa fa-bookmark'></i> En Baja </span>";
    }else
      $material="<span class='label label-info' style='margin: 20%;'><i class='fa fa-bookmark'></i> Entregado</span>";

    if($reg['aviso']==0 AND $reg['status']==0){
      $aviso="<span class='label label-warning' style='margin: 20%;'><i class='fa fa-envelope-o'></i>  En Espera</span>";
    }else if($reg['status']==3){
      $aviso="<span class='label label-default' style='margin: 20%;'><i class='fa fa-envelope'></i>  En Baja</span>";
    }else if($reg['status']==1){
      $aviso="<span class='label label-primary' style='margin: 20%;'><i class='fa fa-envelope-o'></i>  Pagado</span>";
    }else{
      $aviso="<span class='label label-success' style='margin: 20%;'><i class='fa fa-envelope-o'></i>  Aviso Enviado</span>";
    }

    echo '<tr>';
    echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.mb_convert_encoding($reg['id_publico'], "UTF-8").'</span></td>';
    echo '<td>'.$reg['nombre'].' '.$reg['a_paterno'].' '.$reg['a_materno'] . '</td>';


if($reg['tipo']==1){
  $tipo="Alumna ENE";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td ><i class="fa fa-clock-o"> '.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.$reg['nombres'].'</td>';




}else if ($reg['tipo']==2){
  $tipo="Estudiante";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td ><i class="fa fa-clock-o"> '.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.$reg['nombres'].'</td>';

}else if ($reg['tipo']==3){
  $tipo="Tutora";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td ><i class="fa fa-clock-o"> '.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.$reg['nombres'].'</td>';

}else if ($reg['tipo']==4){
   $tipo="Participante";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td ><i class="fa fa-clock-o"> '.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.$reg['nombres'].'</td>';

}else{
   $tipo="Normalista Foraneo";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td ><i class="fa fa-clock-o"> '.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.$reg['nombres'].'</td>';

    if ($reg['status']==0){
      echo '<td>
        <div>
            <a href="correo_normalista.php?id='.$id.'"><button type="button" class="btn btn-primary btn-circle" value="normalista" title="Confirmación de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_normalista_aviso.php?id='.$id.'"><button type="button" class="btn btn-warning btn-circle" value="normalistaA" title="Aviso de Pago"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_normalista_cancelacion.php?id='.$id.'"><button type="button" class="btn btn-danger btn-circle" value="normalistaC" title="Cancelación Folio"><span class="fa fa-envelope" ></span></button></a>
            <a href="correo_normalista_personalizado.php?id='.$id.'"><button type="button" class="btn btn-info btn-circle" value="normalistaP" title="Mensaje Personalizado"><span class="fa fa-envelope" ></span></button></a>
            <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-default btn-circle" title="Eliminar Registro"><span class="fa fa-remove"></span></button></a>
        </div></td>';
    }else if ($reg['status']==3 AND $reg['material']==0){
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