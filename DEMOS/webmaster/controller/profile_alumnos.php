<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-lg-5">
                    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>REGISTRO DE ALUMNOS</h5>
        </div>
    <div class="ibox-content">
        <form role="form" class="form-horizontal" action="lib/insert_alumno.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-10">
                        <input type="text" name="nombre" autocomplete="off" placeholder="Nombre" class="form-control"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Paterno:</label>
                    <div class="col-sm-10">
                        <input type="text" name="a_paterno" placeholder="Apellido Paterno" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Materno:</label>
                    <div class="col-sm-10">
                        <input type="text" name="a_materno" placeholder="Apellido Materno" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Matricula:</label>
                    <div class="col-sm-10">
                        <input type="text" name="matricula" placeholder="Matrícula" class="form-control" autocomplete="off"></div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                </form>

                        </div>
                    </div>
         </div>

<div class="col-lg-7">

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>LISTADO DE ALUMNOS</h5>
        </div>
    <div class="ibox-content">
<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Matricula</th>
          <th>Edición</th>
        </tr>
    </thead>

    <tbody>
<?php
    while($reg=mysql_fetch_array($alumnos)){
$id=$reg['id_matricula']; //ID PARA FORM EN POP UP
$cod=$reg['id_matricula']; //ELIMINAR REGISTROS

$matricula=$reg['matricula'];
$nombre=$reg['nombre'];
$paterno=$reg['a_paterno'];
$materno=$reg['a_materno'];

    echo '<tr>';
    echo '<td> <span class="badge">'.mb_convert_encoding($reg['id_matricula'], "UTF-8").'</span></td>';
    echo '<td class="visible-lg">'.$reg['nombre'].' '.$reg['a_paterno'].' '.$reg['a_materno'] . '</td>';
    echo '<td class="visible-lg">'.mb_convert_encoding($reg['matricula'], "UTF-8").'</td>';
    echo '<td>
            <a><button type="button" class="btn btn-white btn-circle alumno" rel='.$id.' data-toggle="modal"><i class="fa fa-edit"></i></button></a>
            <a onclick="eliminaAlumno('.$cod.')"><button type="button" class="btn btn-danger btn-circle" title="Eliminar Ticket"><span class="fa fa-trash"></span></button></a>
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

<!--
<div class="row">
<div class="col-lg-12">
                <form role="form" enctype="multipart/form-data" action="lib/insert_alumno_csv.php" method="post">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-default btn-file">
                        <span class="fileinput-new">Selecciona Archivo CSV</span>
                        <input accept=".csv" name="csv" type="file" id="csv" />
                        </span>
                    </div><br>
                    <button class="btn btn-primary btn-lg" type="submit" name="submit">Enviar</button>
                </form>
</div>
</div>
-->
</div>