<?php
include("../model/model.php");
session_start();
if ($_SESSION["login"]==""){
    header("location: ../index");
}
include("theme/header.php");

$id = $_GET['id'];
$taller = "SELECT * FROM taller WHERE id_taller='".$id."'";
$res = mysql_query($taller, $link) or die(mysql_error());
$row = mysql_fetch_assoc($res);

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
                            <a href="talleres">TALLERES</a>
                        </li>
                        <li class="active">
                            <strong>TALLER</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">

                    </div>
                    <div class="ibox-content">

                    <form role="form" class="form-horizontal"  action="lib/insert_update_taller.php" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Taller:</label>
                            <div class="col-sm-10">
                            <input type="text" name="nombres" autocomplete="off" placeholder="Nombre del Taller" value="<?=$row['nombres']?>" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cupo:</label>
                            <div class="col-sm-10">
                            <input type="text" name="cupo" placeholder="Cupo de usuarios" value="<?=$row['cupo']?>" class="form-control" autocomplete="off"></div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                    </form>

                    </div>
         </div>
         </div>

    <?php include("theme/footer.php");?>


