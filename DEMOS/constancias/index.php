<?php require('../model/model.php');
session_start();

if ($_SESSION["login"]==""){
    header("location: index");

}else if($_SESSION["login"]=="Administrador" or $_SESSION["login"]=="Contabilidad" or $_SESSION["login"]=="Estadistica"){
session_destroy();
header("location: ../login");
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
                    <h2>Administrador</h2>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="index">Inicio</a>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-success pull-right">Folio</span>
                                            <h5>Último Folio</h5>
                                    </div>
                                    <div class="ibox-content">
                                            <small>Registro</small>
                                            <h2 class="no-margins text-success">
                                                <?php
                                                 if ($row = mysql_fetch_row($folio))
                                                 {
                                                   $id = trim($row[0]);
                                                 }
                                                echo '<span class="font-bold text-success">FNEP'.date('Y').'-'.$id.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-default pull-right">Folio</span>
                                            <h5>Usuarios Inscritos</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-5x"></i></span>
                                        </span>
                                            <small>total</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($total);
                                                $numero = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$numero.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-primary pull-right">Folio</span>
                                            <h5>Registros Pagados</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-5x"></i></span>
                                        </span>
                                            <small>total</small>
                                            <h1 class="no-margins text-navy">
                                                <?php
                                                $result = mysql_query($pago);
                                                $baja = mysql_num_rows($result);
                                                echo '<span class="font-bold text-primary">'.$baja.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-danger pull-right">Folio</span>
                                            <h5>Pendientes por Pagar</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-5x"></i></span>
                                        </span>
                                            <small>total</small>
                                            <h1 class="no-margins text-danger">
                                                <?php
                                                $result = mysql_query($pendiente);
                                                $status = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-warning pull-right">Folio</span>
                                            <h5>Registros Cancelados</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-5x"></i></span>
                                        </span>
                                            <small>total</small>
                                            <h1 class="no-margins text-warning">
                                                <?php
                                                $result = mysql_query($cancelado);
                                                $status = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-danger pull-right">Folio</span>
                                            <h5>Registros Eliminados</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-5x"></i></span>
                                        </span>
                                            <small>total</small>
                                            <h1 class="no-margins text-danger">
                                                <?php
                                                $result = mysql_query($eliminado);
                                                $status = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-success pull-right">Folio</span>
                                            <h5>Material Entregado</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-5x"></i></span>
                                        </span>
                                            <small>total</small>
                                            <h1 class="no-margins text-success">
                                                <?php
                                                $result = mysql_query($material);
                                                $status = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-info pull-right">Folio</span>
                                            <h5>Material No Entregado</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-5x"></i></span>
                                        </span>
                                            <small>total</small>
                                            <h1 class="no-margins text-info">
                                                <?php
                                                $result = mysql_query($materialNo);
                                                $status = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>


                    </div>
                </div>
            </div>
            </div>
        </div>

    <?php include("theme/footer.php");?>