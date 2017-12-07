<?php require('../model/model.php');
session_start();
if ($_SESSION["login"]=="Material" OR $_SESSION["login"]=="Estadistica" OR $_SESSION["login"]=="Contabilidad"){
    header("location: ../index");
}

?>


 <?php include("theme/header.php");?>

<body>
    <div id="wrapper">
        <?php include("theme/nav.php");?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <?php include("lib/navegador.php");?>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message"><?php setlocale(LC_ALL,'es_MX'); echo strftime("%A %d de %B del %Y"); ?>
            <?php $hora = time(); putenv("TZ=America/Mexico_City"); echo date ("H:i a", $hora); ?></span>
                </li>
                <li>
                <a class='dropdown-toggle count-info' href='#'>
                <i class='fa fa-users'></i><span class='label label-warning'></span>
                </a>
                </li>
                <li><?php include("lib/online.php");?></li>
            </ul>
        </nav>
        </div>

        <div class="wrapper wrapper-content">

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>PANEL DE USUARIOS</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index">INICIO</a>
                        </li>
                        <li class="active">
                            <strong>USUARIOS</strong>
                        </li>
                    </ol>
                </div>
            </div>
    
        <div class="col-lg-4">
                    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>REGISTRO DE PONENTES</h5>
        </div>
                        <div class="ibox-content">
        <form role="form" class="form-horizontal" enctype="multipart/form-data" action="lib/insert_usuarios.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-10">
                        <input type="text" name="nombre" autocomplete="off" placeholder="Nombre" class="form-control"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Apellido Paterno:</label>
                    <div class="col-sm-10">
                        <input type="text" name="apaterno" placeholder="Apellido Paterno" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Apellido Materno:</label>
                    <div class="col-sm-10">
                        <input type="text" name="amaterno" placeholder="Apellido Materno" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Usuario:</label>
                    <div class="col-sm-10">
                        <input type="text" name="login" placeholder="Usuario" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-10">
                        <input type="text" name="Password" placeholder="Password" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Biografía:</label>
                    <div class="col-sm-10">
                        <input type="text" name="bio" placeholder="Biografía" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Profesión:</label>
                    <div class="col-sm-10">
                        <input type="text" name="profesion" placeholder="Profesión" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Correo Electrónico:</label>
                    <div class="col-sm-10">
                        <input name="email" id="email" type="text" class="form-control required">
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Teléfono:</label>
                    <div class="col-sm-10">
                        <input name="phone" id="phone" type="text" class="form-control required">
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nivel:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="nivel" required>
                            <option value=""></option>
                            <option value="Administrador">Super Usuario</option>
                            <option value="Contabilidad">Contabilidad</option>
                            <option value="Estadistica">Estadísticas</option>
                            <option value="Material">Entrega de Material</option>
                            <option value="Supervisor">Supervisor</option>
                        </select>
                    </div>
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
<div class="col-lg-8">
<div class="ibox-content"> 
<?php include("controller/profile_usuarios.php");?>
</div>
</div>
        </div>
</div>
    <?php include("theme/footer.php");?>


