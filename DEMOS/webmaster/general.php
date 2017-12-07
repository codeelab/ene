<?php require('../model/model.php');
session_start();
if ($_SESSION["login"]==""){
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
                    <h2>Estadísticas Generales</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index">INICIO</a>
                        </li>
                        <li class="active">
                            <strong>ESTADISTICAS</strong>
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
                                            <h5>Registros</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
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
                                        <span class="label label-default pull-right">Folio</span>
                                            <h5>Usuarios Inscritos</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
                                        </span>
                                            <small>total</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($total_ins);
                                                $numero = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$numero.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="inscritos">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-default pull-right">Folio</span>
                                            <h5>Registros Repetidos</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
                                        </span>
                                            <small>total</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($repetidos);
                                                $numero = mysql_num_rows($result);
                                                echo '<span class="font-bold text-default">'.$numero.'</span>';
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
                                        <span class="label label-primary pull-right">Folio</span>
                                            <h5>Registros Pagados</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
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
                                    <a href="pagado">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-primary" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
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
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
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
                                    <a href="pendientes">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-danger" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-warning pull-right">Folio</span>
                                            <h5>Registros Cancelados</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
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
                                    <a href="cancelados">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-warning" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
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
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
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
                                    <a href="basura">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-danger" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>

<div class="col-lg-12">
    <div class="row">

                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-success pull-right">Folio</span>
                                            <h5>Material Entregado</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
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
                                    <a href="material">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-success" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
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
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
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
                                    <a href="no_entregado">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-info" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                            <h5>MEDIO DE INFORMACIÓN</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-bullhorn fa-3x"></i></span>
                                        </span>
                                            <small>RADIO</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($radio);
                                                $medio = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$medio.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-newspaper-o fa-3x"></i></span>
                                        </span>
                                            <small>PERIÓDICO</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($periodico);
                                                $medio = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$medio.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                            <h5>MEDIO DE INFORMACIÓN</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-chrome fa-3x"></i></span>
                                        </span>
                                            <small>PÁGINA WEB</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($web);
                                                $medio = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$medio.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-weixin fa-3x"></i></span>
                                        </span>
                                            <small>REDES SOCIALES</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($redes);
                                                $medio = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$medio.'</span>';
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
                                            <h5>MEDIO DE INFORMACIÓN</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-3x"></i></span>
                                        </span>
                                            <small>FAMILIARES</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($familia);
                                                $medio = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$medio.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-group fa-3x"></i></span>
                                        </span>
                                            <small>AMIGOS</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($amigos);
                                                $medio = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$medio.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                            <h5>MEDIO DE INFORMACIÓN</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-graduation-cap fa-3x"></i></span>
                                        </span>
                                            <small>NORMAL DE EDUCADORAS</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($normal);
                                                $medio = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$medio.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-industry fa-3x"></i></span>
                                        </span>
                                            <small>CENTRO DE TRABAJO</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($trabajo);
                                                $medio = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$medio.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                            <h5>MEDIO DE INFORMACIÓN</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-file-powerpoint-o fa-3x"></i></span>
                                        </span>
                                            <small>PÓSTER</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($poster);
                                                $medio = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$medio.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-file-excel-o fa-3x"></i></span>
                                        </span>
                                            <small>TRÍPTICO</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($triptico);
                                                $medio = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$medio.'</span>';
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