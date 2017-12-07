<table class="table table-striped table-bordered table-hover" id="tabla_datatable">
    <thead>
        <tr>
            <th>Acción</th>
            <th>Avatar</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Nivel</th>
            </tr>
    </thead>
    <tbody>
<?php
    while($reg=  mysql_fetch_array($usuarios)){
    $id=$reg['id'];
    $cod=$reg['id'];
    $imagen = $reg['avatar'];
    echo '<tr>';
    echo '<td><a href="form_update_profile.php?id='.$id.'"><button type="button" class="btn btn-info btn-xs" ><span class="fa fa-edit"></span></button></a> | <a href="lib/borrar_usuario.php?cod='.$cod.'"><button type="button" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o"></span></button></a></td>';
    echo  '<td ><img src="img/avatars_usuarios/'.$imagen.'" height="25" width="25"></td>';
    echo '<td >'.$reg['nombre'].'</td>';
    echo '<td >'.$reg['apaterno'].'</td>';
    echo '<td >'.$reg['amaterno'].'</td>';
    echo '<td >'.$reg['login'].'</td>';
    echo '<td >'.$reg['email'].'</td>';
    echo '<td >'.$reg['nivel'].'</td>';
    echo '</tr>';
}?>
    </tbody>
</table>