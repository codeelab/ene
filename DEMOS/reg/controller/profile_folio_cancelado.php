<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>Folio</th>
          <th>Taller</th>
          <th>Nombre</th>
          <th>Solicitud</th>
          <th>Estado</th>
          <th>Aviso</th>
          <th>Acción</th>
        </tr>
    </thead>

    <tbody>
<?php
    while($reg=  mysql_fetch_array($folios_cancelados)){
    $id = $reg['id_publico'];
    $cod = $reg['id_publico'];
    $idTaller = $reg['taller'];

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
    echo '<td>'.mb_convert_encoding($reg['taller'], "UTF-8").'</td>';
    echo '<td >'.$reg['nombre'].' '.$reg['a_paterno'].' '.$reg['a_materno'] . '</td>';


if($reg['tipo']==1){
  $tipo="Alumna ENE";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($aviso, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td></td>';
    }else if ($reg['status']==2 AND $reg['material']==0){
        echo '<td>
            <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Habilitar Cancelación"><span class="fa fa-refresh"></span></button></a>
             <a href="lib/elimina_folio_sistema.php?id='.$id.'+taller='.$idTaller.'"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Folio"><span class="fa fa-trash-o"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
          <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
           <a onclick="deleteFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Folio"><span class="fa fa-trash-o"></span></button></a>
      </div></td>';
}else if ($reg['tipo']==2){
  $tipo="Estudiante";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($aviso, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td></td>';
    }else if ($reg['status']==2 AND $reg['material']==0){
        echo '<td>
            <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Habilitar Cancelación"><span class="fa fa-refresh"></span></button></a>
            <a onclick="deleteFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Folio"><span class="fa fa-trash-o"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
          <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
           <a onclick="deleteFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Folio"><span class="fa fa-trash-o"></span></button></a>
      </div></td>';
}else if ($reg['tipo']==3){
  $tipo="Tutora";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($aviso, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td></td>';
    }else if ($reg['status']==2 AND $reg['material']==0){
        echo '<td>
            <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Habilitar Cancelación"><span class="fa fa-refresh"></span></button></a>
             <a onclick="deleteFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Folio"><span class="fa fa-trash-o"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
          <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
           <a onclick="deleteFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Folio"><span class="fa fa-trash-o"></span></button></a>
      </div></td>';
}else if ($reg['tipo']==4){
   $tipo="Participante";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($aviso, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td></td>';
    }else if ($reg['status']==2 AND $reg['material']==0){
        echo '<td>
            <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Habilitar Cancelación"><span class="fa fa-refresh"></span></button></a>
             <a onclick="deleteFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Folio"><span class="fa fa-trash-o"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
          <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
           <a onclick="deleteFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Folio"><span class="fa fa-trash-o"></span></button></a>
      </div></td>';
}else{
   $tipo="Normalista Foraneo";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
    echo '<td>'.mb_convert_encoding($aviso, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td></td>';
    }else if ($reg['status']==2 AND $reg['material']==0){
        echo '<td>
            <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Habilitar Cancelación"><span class="fa fa-refresh"></span></button></a>
             <a onclick="deleteFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Folio"><span class="fa fa-trash-o"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
          <a onclick="recuperarFolio('.$id.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
          <a onclick="deleteFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Folio"><span class="fa fa-trash-o"></span></button></a>
      </div></td>';
}

}
?>
    </tbody>
</table>