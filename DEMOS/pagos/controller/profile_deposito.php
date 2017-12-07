<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>Folio</th>
          <th>Costo</th>
          <th>Ficha</th>
          <th>Nombre</th>
          <th>Solicitud</th>
          <th>Estado</th>
          <th>Acción</th>
        </tr>
    </thead>

    <tbody>
<?php
    while($reg=  mysql_fetch_array($folios_deposito)){
    $id = $reg['id_publico']; //ID PARA FORM EN POP UP
    $cod=$reg['id_publico']; //ELIMINAR REGISTROS

    if($reg['status']==0){
      $status="<div class='pendiente-adm'></div><span class='label label-default' style='margin: 30%;'> Pendiente</span>";
    }else if($reg['status']==1){
      $status="<div class='pagado-adm'></div><span class='label label-default' style='margin: 30%;'>Pagado</span>";
    }else
      $status="<div class='cancelado-adm'></div><span class='label label-default' style='margin: 30%;'>Cancelado</span>";

    echo '<tr>';
    echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.mb_convert_encoding($reg['id_publico'], "UTF-8").'</span></td>';
    echo '<td>'.$reg['costo'].'</td>';
     echo '<td>'.$reg['referencia_pago'].'</td>';
    echo '<td>'.$reg['nombre'].' '.$reg['a_paterno'].' '.$reg['a_materno'] . '</td>';

if($reg['tipo']==1){
  $tipo="Alumna ENE";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td>
        <div>
            <a href="ficha.php?id='.$id.'"><button type="button" class="btn btn-primary btn-circle alumnoEne" value="alumnoEne" title="Confirmación de Pago"><span class="fa fa-credit-card" ></span></button></a>
        </div></td>';
    }else
      echo '<td>
      <div>
          <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
      </div></td>';
}else if ($reg['tipo']==2){
  $tipo="Estudiante";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td>
        <div>
            <a href="ficha.php?id='.$id.'"><button type="button" class="btn btn-primary btn-circle estudiante" value="estudiante" title="Confirmación de Pago"><span class="fa fa-credit-card" ></span></button></a>
        </div></td>';
    }else
      echo '<td>
      <div>
          <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
      </div></td>';
}else if ($reg['tipo']==3){
  $tipo="Tutora";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td>
        <div>
            <a href="ficha.php?id='.$id.'"><button type="button" class="btn btn-primary btn-circle tutora" value="tutora" title="Confirmación de Pago"><span class="fa fa-credit-card" ></span></button></a>
        </div></td>';
    }else
      echo '<td>
      <div>
          <a onclick="cancelaFolio('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
      </div></td>';
}else{
   $tipo="Particulares";
    echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
    echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';

    if ($reg['status']==0){
      echo '<td>
        <div>
            <a href="ficha.php?id='.$id.'"><button type="button" class="btn btn-primary btn-circle asistente" value="asistente" title="Confirmación de Pago"><span class="fa fa-credit-card" ></span></button></a>
        </div></td>';
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