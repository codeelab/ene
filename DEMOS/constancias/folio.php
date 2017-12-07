<?php require('../model/model.php');
session_start();
if ($_SESSION["login"]=="Webmaster" OR $_SESSION["login"]=="Estadistica" OR $_SESSION["login"]=="Contabilidad"){
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
                    <span class="m-r-sm text-muted welcome-message">Soporte | <?php setlocale(LC_ALL,'es_MX'); echo strftime("%A %d de %B del %Y"); ?>
            <?php $hora = time(); putenv("TZ=America/Mexico_City"); echo date ("H:i a", $hora); ?></span>
                </li>
                <li>
                    
                </li>
                <li>
                    
                </li>
            </ul>
        </nav>
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Folios Generales</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li class="active">
                            <strong>Folios</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                    <?php include("controller/profile_folio.php");?>


                    </div>
                </div>
            </div>
            </div>
        </div>

    <?php include("theme/footer.php");?>