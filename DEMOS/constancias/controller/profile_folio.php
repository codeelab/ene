<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>Folio</th>
          <th>Nombre</th>
          <th>Solicitud</th>
          <th>Material</th>
          <th>Acción</th>
        </tr>
    </thead>

    <tbody>
<?php
    while($reg=  mysql_fetch_array($folios_registros)){
    $id = $reg['id_publico']; //ID PARA FORM EN POP UP
    $cod=$reg['id_publico']; //ELIMINAR REGISTROS
    $upt=$reg['id_publico']; //ENTREGA DE MATERIAL



    if($reg['material']==0 AND $reg['status']==0){
      $material="<span class='label label-danger' style='margin: 20%;'><i class='fa fa-bookmark-o'></i> No Entregado</span>";
    }else if($reg['status']==1 AND $reg['material']==0){
      $material="<span class='label label-danger' style='margin: 20%;'><i class='fa fa-bookmark-o'></i> No Entregado</span>";
    }else if($reg['status']==2){
      $material="<span class='label label-default' style='margin: 20%;'><i class='fa fa-bookmark'></i> Cancelado </span>";
    }else
      $material="<span class='label label-info' style='margin: 20%;'><i class='fa fa-bookmark'></i> Entregado</span>";


    echo '<tr>';
    echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.mb_convert_encoding($reg['id_publico'], "UTF-8").'</span></td>';
    echo '<td class="visible-lg">'.mb_convert_encoding($reg['nombre'], "UTF-8").' '.mb_convert_encoding($reg['a_paterno'], "UTF-8").' '.mb_convert_encoding($reg['a_materno'], "UTF-8") . '</td>';


if($reg['tipo']==1){
  $tipo="Alumna ENE";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td>'.mb_convert_encoding($material, "UTF-8").'</td>';

    if ($reg['material']==0){
        echo '<td>
            <a onclick="entregaMaterial('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Entrega de Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
         
      </div></td>';
}else if ($reg['tipo']==2){
  $tipo="Estudiante";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td>'.mb_convert_encoding($material, "UTF-8").'</td>';

    if ($reg['material']==0){
        echo '<td>
            <a onclick="entregaMaterial('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Entrega de Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
         
      </div></td>';
}else if ($reg['tipo']==3){
  $tipo="Tutora";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td>'.mb_convert_encoding($material, "UTF-8").'</td>';

    if ($reg['material']==0){
        echo '<td>
            <a onclick="entregaMaterial('.$id.')"><button type="button" class="btn btn-white btn-circle" title="Entrega de Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
         
      </div></td>';
}else{
   $tipo="Asistente";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td>'.mb_convert_encoding($material, "UTF-8").'</td>';

    if ($reg['material']==0){
        echo '<td>
            <a onclick="entregaMaterial('.$upt.')"><button type="button" class="btn btn-white btn-circle" title="Entrega de Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
         
      </div></td>';
}

}
?>
    </tbody>
</table>