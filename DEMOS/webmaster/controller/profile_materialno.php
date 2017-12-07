<table class="table table-striped table-bordered table-hover table-condensed" id="tabla_folios">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha Registro</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Correo Personal</th>
            <th>Es</th>
            <th>Matricula</th>
            <th>Procedencia</th>
            <th>Medio</th>
            <th>Taller</th>
        </tr>
    </thead>
    <tbody>
<?php
$cont=0;
while($reg=  mysql_fetch_array($materialesNo)){

echo '<tr>';
    echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.mb_convert_encoding($reg['id_publico'], "UTF-8").'</span></td>';
  echo '<td >'.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';

if($reg['tipo']==1){
  $tipo="Alumno ENE";
  echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';

  }else if($reg['tipo']==2){
  $tipo="Institución";
  echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';

  }elseif ($reg['tipo']==3){
  $tipo="Calidad";
  echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
}else{
  $tipo="Asistente";
  echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
}
$cont++;

echo '<td>'.mb_convert_encoding($reg['nombre'], "UTF-8")." ".mb_convert_encoding($reg['a_paterno'], "UTF-8")." ".mb_convert_encoding($reg['a_materno'], "UTF-8").'</td>';
echo '<td>'.mb_convert_encoding($reg['c_personal'], "UTF-8").'</td>';
echo '<td>'.mb_convert_encoding($reg['soy'], "UTF-8").'</td>';
echo '<td>'.mb_convert_encoding($reg['matricula'], "UTF-8").'</td>';
echo '<td>'.mb_convert_encoding($reg['procedencia'], "UTF-8").'</td>';
echo '<td>'.mb_convert_encoding($reg['medio'], "UTF-8").'</td>';
echo '<td>'.mb_convert_encoding($reg['nombres'], "UTF-8").'</td>';

echo '</tr>';

}
?>
    </tbody>
</table>
