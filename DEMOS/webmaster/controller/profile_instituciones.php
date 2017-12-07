<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-lg-8">
                    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>REGISTRO DE INSTITUCIONES EDUCATIVAS</h5>
        </div>
    <div class="ibox-content">
        <form role="form" class="form-horizontal" action="lib/insert_instituciones.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-10">
                        <input type="text" name="nombre_ins" autocomplete="off" placeholder="Nombre Institución Educativa" class="form-control"></div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Registro</button>
                </form>

                        </div>
                    </div>
         </div>

<div class="col-lg-4">

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>LISTADO DE INSTITUCIONES</h5>
        </div>
    <div class="ibox-content">
<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr>
          <th>#</th>
          <th>Escuela</th>
          <th>Edición</th>
        </tr>
    </thead>

    <tbody>
<?php
        $conexion= new mysqli("localhost","foroene_morelia","+For03ne$2017+","foroene_2017",3306);
        $strConsulta = "SELECT * FROM institucion";
        $acentos = $conexion->query("SET NAMES 'utf8'");
        $result = $conexion->query($strConsulta);

        while( $reg = $result->fetch_array() ){

    echo '<tr>';
    echo '<td>'.$reg['id_institucion'].'</td>';
    echo '<td>'.$reg['nombre_ins'].'</td>';
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