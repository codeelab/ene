<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>Folio</th>
          <th>Fecha de Registro</th>
          <th>Nombre</th>
          <th>Ficha de pago</th>
          <th>Taller</th>
          <th>Solicitud</th>
          <th>Material</th>
          <th>Acción</th>
        </tr>
    </thead>

    <tbody>
<?php
    while($reg=  mysql_fetch_array($folios_registros)){
    $id=$reg['id_publico']; //ENTREGA DE MATERIAL



    if($reg['material']==0 AND $reg['status']==0){
      $material="<span class='label label-danger' style='margin: 20%;'><i class='fa fa-bookmark-o'></i> No Entregado</span>";
    }else if($reg['status']==1 AND $reg['material']==0){
      $material="<span class='label label-danger' style='margin: 20%;'><i class='fa fa-bookmark-o'></i> No Entregado</span>";
    }else if($reg['status']==2){
      $material="<span class='label label-default' style='margin: 20%;'><i class='fa fa-bookmark'></i> Cancelado </span>";
    }else
      $material="<span class='label label-info' style='margin: 20%;'><i class='fa fa-bookmark'></i> Entregado</span>";


    echo '<tr>';
    echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.$reg['id_publico'].'</span></td>';
    echo '<td>'.$reg['fecha']. '</td>';
    echo '<td>'.$reg['nombre'].' '.$reg['a_paterno'].' '.$reg['a_materno'] . '</td>';
    echo '<td>'.$reg['referencia_pago']. '</td>';
    echo '<td>'.$reg['nombres']. '</td>';

if($reg['tipo']==1){
  $tipo="Alumna ENE";
    echo '<td><i class="fa fa-user-o"></i>  '.$tipo.'</td>';
    echo '<td>'.$material.'</td>';

    if ($reg['material']==0){
        echo '<td>
            <a href="lib/update_material.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Entrega de Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
         
      </div></td>';
}else if ($reg['tipo']==2){
  $tipo="Estudiante";
    echo '<td><i class="fa fa-user-o"></i>  '.$tipo.'</td>';
    echo '<td>'.$material.'</td>';

    if ($reg['material']==0){
        echo '<td>
            <a href="lib/update_material.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Entrega de Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
         
      </div></td>';
}else if ($reg['tipo']==3){
  $tipo="Tutora";
    echo '<td><i class="fa fa-user-o"></i>  '.$tipo.'</td>';
    echo '<td>'.$material.'</td>';

    if ($reg['material']==0){
        echo '<td>
            <a href="lib/update_material.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Entrega de Material"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>
         
      </div></td>';
}else{
   $tipo="Participante";
    echo '<td><i class="fa fa-user-o"></i>  '.$tipo.'</td>';
    echo '<td>'.$material.'</td>';

    if ($reg['material']==0){
        echo '<td>
            <a href="lib/update_material.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Entrega de Material"><span class="fa fa-bookmark"></span></button></a>
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