<?php
session_start();
if ($_SESSION["login"]=="Material" OR $_SESSION["login"]=="Estadistica" OR $_SESSION["login"]=="Contabilidad"){
    header("location: ../index");
}
include("theme/header.php");
include("../model/model.php");
?>

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
                    <h2>PANEL DE ALUMNOS</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index">INICIO</a>
                        </li>
                        <li>
                            <a href="data">INSTITUCIÓN</a>
                        </li>
                        <li class="active">
                            <strong>ALUMNOS</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

            <?php include("controller/profile_alumnos.php");?>
        </div>


                        <!--  INICIO DEL POP UP ALUMNOS -->
                            <div class="modal inmodal" id="alumno" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Actulización de Alumno</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php include('controller/form_update_alumno.php'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <?php include("theme/footer.php");?>


