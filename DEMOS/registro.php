<?php include('model/model.php'); ?>
<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FORO ENE | REGISTRO</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/bootstrapValidator.min.css"/>
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/plugins/sweetalert/sweetalert.min.css">
    <link href="assets/css/style.css" rel="stylesheet">

<style type="text/css">
.alta{ margin-top:15px;}
.form-control{ box-shadow:none; border-color:#eee; height:49px;}
.form-control:focus{ box-shadow:none; border-color:#00b09c;}
.form-control-feedback{ line-height:50px;}
.main-btn{ background:#00b09c; border-color:#00b09c; color:#fff;}
.main-btn:hover{ background:#00a491;color:#fff;}
.form-control-feedback {
line-height: 50px;
top: 0px;
}
.ds-btn li{ list-style:none; float:left; padding:15px; }
.ds-btn li a span{padding-left:15px;padding-right:5px;width:100%;display:inline-block; text-align:left;}
.ds-btn li a span small{width:100%; display:inline-block; text-align:left;}
    </style>
</head>

<body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="assets/img/ene.png" width="170" height="100"/> <center>ENE MORELIA</center>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> </span> </a>
                        </div>
                        <div class="logo-element">
                        ENE MORELIA
                        </div>
                    </li>
                    <!--
                    <li>
                        <a href="alumno"><i class="fa fa-dashboard fa-fw"></i><span class="nav-label">INICIO</span></a>
                    </li>
                    <li>
                        <a href="alumno"><i class="fa fa-edit fa-fw"></i><span class="nav-label">Registro Alumnos ENE</span></a>
                    </li>
                    <li>
                        <a href="institucion"><i class="fa fa-edit fa-fw"></i><span class="nav-label">Registro Estudiantes</span></a>
                    </li>
                    <li>
                        <a href="calidad"><i class="fa fa-edit fa-fw"></i><span class="nav-label">Registro Tutoras</span></a>
                    </li>
                    <li>
                        <a href="asistente"><i class="fa fa-edit fa-fw"></i><span class="nav-label">Registro Asistentes</span></a>
                    </li>
                    -->
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Escuela Normal para Educadoras de Morelia | <?php setlocale(LC_ALL,'es_MX'); echo strftime("%A %d de %B del %Y"); ?>
            <?php $hora = time(); putenv("TZ=America/Mexico_City"); echo date ("H:i a", $hora); ?></span>
                </li>
                <li>
                    <a class='dropdown-toggle count-info' data-toggle='dropdown' href='#'>
                    <i class='fa fa-users'></i><span class='label label-primary'></span></a>
                </li>
            </ul>
        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Solicitud de Registro | Foro Nacional de Educación Preescolar <?php echo date('Y') ?></h2>
                </div>
                <div class="col-lg-2">

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

<H1>Por el momento los registros en línea estan cerrados, si desea participar los esperamos en Ceconexpo</H1>
<!--
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
    -->
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

        <div class="footer">
            <div class="pull-right">
             <a href="www.codeelab.com" target="_blank">Codeelab</a>
            </div>
            <div>
                <? echo date('Y').' '.$nombre_completo; ?>
            </div>
        </div>

        </div>
        </div>
    <!-- Mainly scripts -->
    <script src="assets/js/jquery-2.1.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="assets/js/inspinia.js"></script>
    <script src="assets/js/plugins/pace/pace.min.js"></script>
    <script src="assets/js/funciones.js"></script>
    <script src="assets/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui-1.10.4.min.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93258404-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
