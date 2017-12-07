<table class="table table-striped table-bordered table-hover table-condensed" id="tabla_folios">
    <thead>
        <tr>
            <th>Folio</th>
            <th>Fecha Registro</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Correo Personal</th>
            <th>Matricula</th>
            <th>Procedencia</th>
        </tr>
    </thead>
    <tbody>
<?php
while($reg=  mysql_fetch_array($cuatro)){

echo '<tr>';
    echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.mb_convert_encoding($reg['id_publico'], "UTF-8").'</span></td>';
  echo '<td >'.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';

if($reg['tipo']==1){
  $tipo="Alumna ENE";
  echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';

  }else if($reg['tipo']==2){
  $tipo="Estudiante";
  echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';

  }elseif ($reg['tipo']==3){
  $tipo="Tutora";
  echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
}else{
  $tipo="Participante";
  echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
}

echo '<td>'.$reg['nombre']." ".$reg['a_paterno']." ".$reg['a_materno'].'</td>';
echo '<td>'.$reg['c_personal'].'</td>';
echo '<td>'.$reg['matricula'].'</td>';

if($reg['procedencia']==1){
  $procedencia="Victoria Barrera de Talavera";
  echo '<td >'.$procedencia.'</td>';
  }else if($reg['procedencia']==2){
  $procedencia="Rosaura Zapata Anexo";
  echo '<td >'.$procedencia.'</td>';
  }elseif ($reg['procedencia']==3){
  $procedencia="Frida Kahlo";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==4){
  $procedencia="Mtra. Irene Barriga Ruiz ";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==5){
  $procedencia="Ignacio López Rayón";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==6){
  $procedencia="Enrique Conrado Rebsamen";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==7){
  $procedencia="Tomás Alva Edison";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==8){
  $procedencia="Dr. Melchor Díaz Rubio";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==9){
  $procedencia="José María Morelos y Pavón";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==10){
  $procedencia="Matilde Montoya";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==11){
  $procedencia="Daniel Delgadillo";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==12){
  $procedencia="Rosaura Zapata";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==13){
  $procedencia="Anton de Schutter";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==14){
  $procedencia="Heber Soto Fierro";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==15){
  $procedencia="Gral. Francisco J. Múgica";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==16){
  $procedencia="Moctezuma";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==17){
  $procedencia="Francisco Javier Clavijero";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==18){
  $procedencia="Rosaura Ramos";
  echo '<td >'.$procedencia.'</td>';
}elseif ($reg['procedencia']==19){
  $procedencia="Jesús Álvarez Constantino";
  echo '<td >'.$procedencia.'</td>';
}else{
  $procedencia="S/N";
  echo '<td >'.$procedencia.'</td>';
}

echo '</tr>';

}
?>
    </tbody>
</table>
