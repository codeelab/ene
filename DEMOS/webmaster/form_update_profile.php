<?php
header("Content-Type: text/html;charset=utf-8");
 require('lib/config.php');
session_start();
if ($_SESSION["login"]==""){
    header("location: ../index.php");
}

$id=$_GET['id'];
$link=  Conectarse();
$listado=  mysql_query("SELECT nombre, apaterno, amaterno FROM usuarios WHERE id='$id'",$link);

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
                        <li>
                            <a href="usuarios">USUARIOS</a>
                        </li>
                        <li class="active">
                            <strong><?php echo $reg['nombre'].' '.$reg['apaterno'].' '.$reg['amaterno']; ?></strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

<form role="form" action="lib/update.php" method="post">
    <div class="form-group">
        <label for="input" class="col-sm-2 control-label">Nombre:</label>
            <div class="input-group">
                <div class="input-group-addon"><span class="fa fa-user-plus"></span></div>
                <input class="form-control" type="text" name="nombre" value="<?php echo $reg['nombre']; ?>" placeholder="<?php echo $_SESSION['nombre']; ?>" requerid>
            </div>
    </div>
    <div class="form-group">
        <label for="input" class="col-sm-2 control-label">Apellido Paterno:</label>
            <div class="input-group">
                <div class="input-group-addon"><span class="fa fa-user-plus"></span></div>
                <input class="form-control" type="text" name="apaterno" value="<?php echo $reg['apaterno']; ?>" placeholder="<?php echo $_SESSION['apaterno']; ?>" requerid>
            </div>
    </div>
    <div class="form-group">
        <label for="input" class="col-sm-2 control-label">Apellido Materno:</label>
            <div class="input-group">
                <div class="input-group-addon"><span class="fa fa-user-plus"></span></div>
                <input class="form-control" type="text" name="amaterno" value="<?php echo $reg['amaterno']; ?>" placeholder="<?php echo $_SESSION['amaterno']; ?>" requerid>
            </div>
    </div>
    <div class="form-group">
        <label for="input" class="col-sm-2 control-label">Email:</label>
            <div class="input-group">
                <div class="input-group-addon"><span class="fa fa-envelope"></span></div>
                <input class="form-control" type="text" name="email" value="<?php echo $reg['email']; ?>" placeholder="<?php echo $_SESSION['email']; ?>" requerid>
            </div>
    </div>
    <div class="form-group">
        <label for="user" class="col-sm-2 control-label">Usuario:</label>
            <div class="input-group">
                <div class="input-group-addon"><span class="fa fa-user"></span></div>
                <input class="form-control" type="text" name="login" value="<?php echo $reg['login']; ?>" placeholder="<?php echo $_SESSION['login']; ?>" requerid>
            </div>
    </div>
    <div class="form-group">
        <label for="input" class="col-sm-2 control-label">Nivel</label>
            <div class="input-group">
                <div class="input-group-addon"><span class="fa fa-plus"></span></div>
                <input class="form-control" type="text" value="<?=$_SESSION['nivel'];?>" readonly>
            </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" value="Actualizar" class="btn btn-info btn-lg">Actualizar</button>
</form>


                    </div>
         </div>
         </div>

    <?php include("theme/footer.php");?>


