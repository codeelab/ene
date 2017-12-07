<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>Folio</th>
          <th>Nombre</th>
          <th>Solicitud</th>
          <th>Material</th>
          <th>Entrego</th>
          <th>Fecha</th>
          <th>Acción</th>
        </tr>
    </thead>

    <tbody>
<?php
    while($reg=  mysql_fetch_array($folios_entregados)){
    $id = $reg['id_publico']; //ID PARA FORM EN POP UP



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
    echo '<td>'.$reg['nombre'].' '.$reg['a_paterno'].' '.$reg['a_materno'] . '</td>';


if($reg['tipo']==1){
  $tipo="Alumna ENE";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td>'.mb_convert_encoding($material, "UTF-8").'</td>';
        echo '<td>'.mb_convert_encoding($reg['entrego'], "UTF-8") . '</td>';
    echo '<td>'.mb_convert_encoding($reg['solucion'], "UTF-8") . '</td>';

    if ($reg['material']==1){
        echo '<td>
            <a href="lib/recupera_material.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Reasignar Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }
}else if ($reg['tipo']==2){
  $tipo="Estudiante";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td>'.mb_convert_encoding($material, "UTF-8").'</td>';
        echo '<td>'.mb_convert_encoding($reg['entrego'], "UTF-8") . '</td>';
    echo '<td>'.mb_convert_encoding($reg['solucion'], "UTF-8") . '</td>';

    if ($reg['material']==1){
        echo '<td>
            <a href="lib/recupera_material.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Reasignar Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }
}else if ($reg['tipo']==3){
  $tipo="Tutora";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td>'.mb_convert_encoding($material, "UTF-8").'</td>';
        echo '<td>'.mb_convert_encoding($reg['entrego'], "UTF-8") . '</td>';
    echo '<td>'.mb_convert_encoding($reg['solucion'], "UTF-8") . '</td>';

    if ($reg['material']==1){
        echo '<td>
            <a href="lib/recupera_material.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Reasignar Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }
}else{
   $tipo="Asistente";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td>'.mb_convert_encoding($material, "UTF-8").'</td>';
        echo '<td>'.mb_convert_encoding($reg['entrego'], "UTF-8") . '</td>';
    echo '<td>'.mb_convert_encoding($reg['solucion'], "UTF-8") . '</td>';

    if ($reg['material']==1){
        echo '<td>
            <a href="lib/recupera_material.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Reasignar Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }

}

}
?>
    </tbody>
</table>