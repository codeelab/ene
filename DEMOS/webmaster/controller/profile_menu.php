<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-lg-5">
                    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>REGISTRO DE MENÚS</h5>
        </div>
                        <div class="ibox-content">
        <form role="form" class="form-horizontal" action="lib/insert_menu.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-10">
                        <input type="text" name="nombre" autocomplete="off" placeholder="Nombre del Menú" class="form-control"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">URL:</label>
                    <div class="col-sm-10">
                        <input type="text" name="url" placeholder="URL del Menú" class="form-control" autocomplete="off"></div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                </form>


                        </div>
                    </div>
         </div>
<div class="col-lg-7">

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>LISTADO DE MENÚS</h5>
        </div>

    <div class="ibox-content">
<table class="table table-striped table-bordered table-hover table-condensed" id="tabla_folios">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>URL</th>
            <th>Orden</th>
            <th>Edición</th>
        </tr>
    </thead>
    <tbody>
<?php
while($reg=mysql_fetch_array($menu)){
echo '<tr>';
    echo '<td> <span class="badge">'.$reg['id_menu'].'</span></td>';
echo '<td>'.$reg['nombre'].'</td>';
echo '<td>'.$reg['url'].'</td>';
echo '<td>'.$reg['orden'].'</td>';
echo '<td>
        <a><button type="button" class="btn btn-white btn-circle"><i class="fa fa-edit"></i></button></a>
        <a onclick="delMenu('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
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

<div class="row">

</div>
</div>