<form role="form" class="form-horizontal"  action="lib/update_alumno.php" method="post">
    <div class="form-group">
        <label class="col-sm-2 control-label">Matricula:</label>
        <div class="col-sm-10">
        <input type="text" placeholder="Matricula" name="matricula" id="id_matricula_alumno" class="form-control" autocomplete="off"></div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nombre:</label>
        <div class="col-sm-10">
        <input type="text" name="nombre" id="nombre_alumno" autocomplete="off" placeholder="Nombre" class="form-control"></div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Paterno:</label>
        <div class="col-sm-10">
        <input type="text" name="a_paterno" id="paterno_alumno" placeholder="Apellido Paterno" class="form-control" autocomplete="off"></div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Materno:</label>
        <div class="col-sm-10">
        <input type="text" name="a_materno" id="materno_alumno" placeholder="Apellido Materno" class="form-control" autocomplete="off"></div>
    </div>
    <button class="btn btn-primary btn-lg" type="submit">Actualizar</button>
</form>