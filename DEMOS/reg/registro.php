<?php require('../model/model.php');
session_start();
if ($_SESSION["login"]=="Webmaster" OR $_SESSION["login"]=="Material" OR $_SESSION["login"]=="Estadistica"){
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

        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Folios Pagados</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index">Inicio</a>
                        </li>
                        <li>
                            <a href="general">Estadisticas</a>
                        </li>
                        <li class="active">
                            <strong>Pagados</strong>
                        </li>
                    </ol>
                </div>
            </div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span>  Bienvenido, elija su opción de registro:</h3>
                </div>
                <div class="panel-body">
<div class="row">
    <ul class="ds-btn">
        <li>
          <a class="btn btn-lg btn-warning" href="alumno">
          <i class="fa fa-graduation-cap pull-left" aria-hidden="true"></i>
          <span>Alumnos ENE<br><small>Nivel Licenciatura</small></span></a>
        </li>
        <li>
         <a class="btn btn-lg btn-success " href="institucion">
         <i class="fa fa-graduation-cap pull-left" aria-hidden="true"></i>
         <span>Estudiantes<br><small>Nivel Licenciatura</small></span></a>
        </li>
        <li>
         <a class="btn btn-lg btn-danger" href="calidad">
         <i class="fa fa-graduation-cap pull-left" aria-hidden="true"></i>
         <span>Tutoras<br><small>4º Grado ENE</small></span></a>
        </li>
        <li>
         <a class="btn btn-lg btn-info" href="asistente">
         <i class="fa fa-group pull-left" aria-hidden="true"></i>
         <span>Particulares<br><small>Cualquier nivel académico</small></span></a>
        </li>
    </ul>
</div>
<!--
<div class="row">
    <ul class="ds-btn">
        <li>
          <a class="btn btn-lg btn-default" href="alumno">
          <i class="fa fa-graduation-cap pull-left" aria-hidden="true"></i>
          <span>Estudiantes Normales Foraneas<br><small>Nivel Licenciatura</small></span></a>
        </li>
    </ul>
</div>
-->
                </div>
            </div>
        </div>
    </div>
      </div>

          <?php include("theme/footer.php");?>