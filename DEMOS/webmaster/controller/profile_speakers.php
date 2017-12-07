<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-lg-5">
                    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>REGISTRO DE PONENTES</h5>
        </div>
                        <div class="ibox-content">
        <form role="form" class="form-horizontal" enctype="multipart/form-data" action="lib/insert_user.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-10">
                        <input type="text" name="nombre" autocomplete="off" placeholder="Nombre" class="form-control"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Biografía:</label>
                    <div class="col-sm-10">
                        <input type="text" name="bio" placeholder="Biografía" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">País:</label>
                    <div class="col-sm-10">
                        <input type="text" name="pais" placeholder="País" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Twitter:</label>
                    <div class="col-sm-10">
                        <input type="text" name="twitter" placeholder="Twitter" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Facebook:</label>
                    <div class="col-sm-10">
                        <input type="text" name="facebook" placeholder="Facebook" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Instagram:</label>
                    <div class="col-sm-10">
                        <input type="text" name="instagram" placeholder="Instagram" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Youtube:</label>
                    <div class="col-sm-10">
                        <input type="text" name="youtube" placeholder="Youtube" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Avatar:</label>
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <span class="input-group-addon btn btn-default btn-file">
                                <input type="file" name="imagen"/>
                            </span>
                            <a href="#" class="input-group-addon btn btn-danger fileinput-exists" data-dismiss="fileinput">Eliminar</a>
                        </div>
                    </div>
                    <input type="hidden" name="opcion" value="1" >
                    <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                </form>


                        </div>
                    </div>
         </div>

<div class="col-lg-7">

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>LISTADO DE PONENTES</h5>
        </div>
    <div class="ibox-content">
        <div class="table-responsive">
        <table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">
                    <thead>
                    <tr>
                        <th>Avatar</th>
                        <th>Nombre</th>
                        <th>País</th>
                        <th>Edición</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
    while($reg = mysql_fetch_array($ponentes)){
    $code = $reg['id_ponente'];
    $imagen = $reg['imagen'];

    echo '<tr>';
    echo  '<td ><img src="img/avatars_ponentes/'.$imagen.'" height="25" width="25"></td>';
    echo '<td >'.$reg['nombre'].'</td>';
    echo '<td >'.$reg['pais'].'</td>';
    echo '<td>
            <a><button type="button" class="btn btn-white btn-circle"><i class="fa fa-edit"></i></button></a>
            <a onclick="deletePonentes('.$code.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
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