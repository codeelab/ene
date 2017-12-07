<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-lg-12">
                    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>REGISTRO DE TALLERES</h5>
        </div>
                        <div class="ibox-content">
        <form role="form" class="form-horizontal" action="lib/insert_taller.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-10">
                        <input type="text" name="nombres" autocomplete="off" placeholder="Nombre del Taller" class="form-control"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Cupo:</label>
                    <div class="col-sm-10">
                        <input type="text" name="cupo" placeholder="Máximo de registros al taller" class="form-control" autocomplete="off"></div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-list" aria-hidden="true"></i>  Agregar</button>
        </form>


                        </div>
                    </div>
         </div>

    </div>

<div class="row">
<div class="col-lg-12">

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>LISTADO DE TALLERES</h5>
        </div>

    <div class="ibox-content">
<table class="table table-striped table-bordered table-hover table-condensed" id="tabla_folios">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Cupo</th>
            <th>Edición</th>
        </tr>
    </thead>
    <tbody>
<?php
while($reg=mysql_fetch_array($talleres)){
$id = $reg['id_taller']; //ID PARA FORM EN POP UP
$cod=$reg['id_taller']; //ELIMINAR REGISTROS
$nombre=$reg['nombres'];
$cupo=$reg['cupo'];
echo '<tr>';
    echo '<td> <span class="badge">'.$reg['id_taller'].'</span></td>';
echo '<td>'.$reg['nombres'].'</td>';
echo '<td>'.$reg['cupo'].'</td>';
echo '<td>
        <a href="actualiza_taller.php?id='.$id.'"><button type="button" class="btn btn-white btn-circle" title="Actualizar Taller"><i class="fa fa-edit"></i></button></a>
        <a onclick="eliminaTaller('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Taller"><span class="fa fa-trash"></span></button></a>
      </td>';
echo '</tr>';

}
?>
    </tbody>
</table>


                    </div>
                </div>


</div>
</div>
</div>