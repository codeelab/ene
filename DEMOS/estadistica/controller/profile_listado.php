<table class="table table-striped table-bordered table-hover table-condensed" id="tabla_folios">
    <thead>
        <tr>
            <th>Folio</th>
            <th>Registro</th>
            <th>Nombre</th>
            <th>Costo</th>
            <th>Taller</th>
            <th>Tipo</th>
        </tr>
    </thead>
    <tbody>
<?php
$cont=0;
while($reg=  mysql_fetch_array($folios_registros)){

echo '<tr>';
    echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.mb_convert_encoding($reg['id_publico'], "UTF-8").'</span></td>';
  echo '<td >'.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
echo '<td>'.$reg['nombre']." ".$reg['a_paterno']." ".$reg['a_materno'].'</td>';
echo '<td>'.$reg['costo'].'</td>';
echo '<td>'.$reg['nombres'].'</td>';
if($reg['tipo']==1){
  $tipo="Alumna ENE";
  echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';

  }else if($reg['tipo']==2){
  $tipo="Escuela";
  echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';

  }elseif ($reg['tipo']==3){
  $tipo="Tutora";
  echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
}else{
  $tipo="Participante";
  echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
}

echo '</tr>';

}
?>
    </tbody>
</table>
