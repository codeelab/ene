<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>Folio</th>
          <th>Nombre</th>
          <th>Solicitud</th>
          <th>Correo</th>
          <th>Acción</th>
        </tr>
    </thead>

    <tbody>
<?php
    while($reg=  mysql_fetch_array($correo_reg)){
    $id=$reg['id_publico']; //ENTREGA DE correo



    if($reg['correo_reg']==1){
      $correo="<span class='label label-info'><i class='fa fa-envelope-o'></i> Enviado</span>";
    }else
      $correo="<span class='label label-danger'><i class='fa fa-envelope'></i> No enviado</span>";


    echo '<tr>';
    echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.mb_convert_encoding($reg['id_publico'], "UTF-8").'</span></td>';
    echo '<td>'.$reg['nombre'].' '.$reg['a_paterno'].' '.$reg['a_materno'] . '</td>';

if($reg['tipo']==1){
  $tipo="Alumna ENE";
    echo '<td><i class="fa fa-user-o"></i>  '.$tipo.'</td>';
    echo '<td>'.$correo.'</td>';

    if ($reg['correo_reg']==0){
        echo '<td>
            <a href="correo_reg.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Entrega de correo"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>

      </div></td>';
}else if ($reg['tipo']==2){
  $tipo="Estudiante";
    echo '<td><i class="fa fa-user-o"></i>  '.$tipo.'</td>';
    echo '<td>'.$correo.'</td>';

    if ($reg['correo_reg']==0){
        echo '<td>
            <a href="correo_reg.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Entrega de correo"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>

      </div></td>';
}else if ($reg['tipo']==3){
  $tipo="Tutora";
    echo '<td><i class="fa fa-user-o"></i>  '.$tipo.'</td>';
    echo '<td>'.$correo.'</td>';

    if ($reg['correo_reg']==0){
        echo '<td>
            <a href="correo_reg.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Entrega de correo"><span class="fa fa-bookmark"></span></button></a>
        </td>';
    }else
      echo '<td>
      <div>

      </div></td>';
}else{
   $tipo="Participante";
    echo '<td><i class="fa fa-user-o"></i>  '.$tipo.'</td>';
    echo '<td>'.$correo.'</td>';

    if ($reg['correo_reg']==0){
        echo '<td>
            <a href="correo_reg.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Entrega de correo"><span class="fa fa-bookmark"></span></button></a>
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