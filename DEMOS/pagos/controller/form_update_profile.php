<form role="form" class="form-horizontal" enctype="multipart/form-data" action="lib/insert_update_profile.php" method="post">

<div class="form-group">
    <label class="col-sm-2 control-label">Nombre:</label>
<div class="col-sm-10">
    <input type="text" name="nombre" autocomplete="off" placeholder="Nombre" value="<?php echo $_SESSION["nombre"]; ?>" class="form-control"></div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Paterno:</label>
<div class="col-sm-10">
    <input type="text" name="apaterno" placeholder="Apellido Paterno" value="<?php echo $_SESSION["apaterno"]; ?>" class="form-control" autocomplete="off"></div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Materno:</label>
<div class="col-sm-10">
    <input type="text" name="amaterno" placeholder="Apellido Materno" value="<?php echo $_SESSION["amaterno"]; ?>" class="form-control" autocomplete="off"></div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Login:</label>
<div class="col-sm-4">
    <input type="text" name="login" placeholder="usuario" class="form-control" value="<?php echo $_SESSION["login"]; ?>" autocomplete="off"></div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Profesión:</label>
<div class="col-sm-10">
    <input type="text" name="profesion" placeholder="Profesión" class="form-control" value="<?php echo $_SESSION["profesion"]; ?>" autocomplete="off"></div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Correo:</label>
<div class="col-sm-10">
    <input type="text" name="email" placeholder="Correo Personal" class="form-control" value="<?php echo $_SESSION["email"]; ?>" autocomplete="off"></div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Telefono:</label>
<div class="col-sm-10">
    <input type="text" name="phone" placeholder="Telefono" class="form-control" value="<?php echo $_SESSION["phone"]; ?>" autocomplete="off"></div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Biografía:</label>
<div class="col-sm-10">
    <input type="text" name="shortbio" placeholder="Youtube" class="form-control" value="<?php echo $_SESSION["shortbio"]; ?>" autocomplete="off"></div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Avatar:</label>
<div class="fileinput fileinput-new input-group" data-provides="fileinput">
    <span class="input-group-addon btn btn-default btn-file">
        <input type="file" name="avatar"/>
    </span>
</div>
</div>
<input type="hidden" name="id" value="<?php echo $id;?>">
<button class="btn btn-primary btn-lg" type="submit">Enviar</button>
</form>