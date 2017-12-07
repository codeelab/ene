<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>Folio</th>
          <th>Ficha Dep.</th>
          <th>Nombre</th>
          <th>Taller</th>
          <th>Estado</th>
          <th>Aviso</th>
          <th>Material</th>
        </tr>
    </thead>

    <tbody>
<?php
    while($reg=  mysql_fetch_array($asistentes_no_entregado)){

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
    echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.$reg['id_publico'].'</span></td>';
    echo '<td>'.$reg['referencia_pago'].'</td>';
    echo '<td>'.$reg['nombre'].' '.$reg['a_paterno'].' '.$reg['a_materno'] . '</td>';
    echo '<td>'.$reg['nombres'].'</td>';
    echo '<td>'.$status.'</td>';
    echo '<td>'.$aviso.'</td>';
    echo '<td>'.$material.'</td>';
}
?>
    </tbody>
</table>