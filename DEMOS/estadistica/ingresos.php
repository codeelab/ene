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
                    <h2>INGRESOS FORO <?php echo date('Y'); ?></h2>
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
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

        <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-warning pull-right">Ingreso</span>
                                            <h5>Alumnas ENE</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
                                        </span>
                                            <small>REGISTROS</small>
                                            <h1 class="no-margins text-warning">
                                                <?php
                                                $result = mysql_query($alumnas_pago);
                                                $status = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                        <br>
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-dollar fa-3x"></i></span>
                                        </span>
                                            <small>INGRESO</small>
                                            <h1 class="no-margins text-warning">
                                                <?php
                                                $row = mysql_fetch_array($money_alumnas, MYSQL_ASSOC);
                                                $total = $row['total'];
                                                echo '<span class="font-bold">'.$total.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                    </div>
                                    <a href="alumnas-pagado">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-warning" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-success pull-right">Ingreso</span>
                                            <h5>Estudiantes</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
                                        </span>
                                            <small>REGISTROS</small>
                                            <h1 class="no-margins text-success">
                                                <?php
                                                $result = mysql_query($estudiante_pago);
                                                $status = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-dollar fa-3x"></i></span>
                                        </span>
                                            <small>INGRESO</small>
                                            <h1 class="no-margins text-success">
                                                <?php
                                                $row = mysql_fetch_array($money_estudiantes, MYSQL_ASSOC);
                                                $total = $row['total'];
                                                echo '<span class="font-bold">'.$total.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                    </div>
                                    <a href="estudiantes_pagado">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-success" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-danger pull-right">Ingreso</span>
                                            <h5>Tutoras</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
                                        </span>
                                            <small>REGISTROS</small>
                                            <h1 class="no-margins text-danger">
                                                <?php
                                                $result = mysql_query($tutora_pago);
                                                $status = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-dollar fa-3x"></i></span>
                                        </span>
                                            <small>INGRESO</small>
                                            <h1 class="no-margins text-danger">
                                                <?php
                                                $row = mysql_fetch_array($money_tutoras, MYSQL_ASSOC);
                                                $total = $row['total'];
                                                echo '<span class="font-bold">'.$total.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                    </div>
                                    <a href="tutoras_pagado">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-danger" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-info pull-right">Ingreso</span>
                                            <h5>Asistentes</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
                                        </span>
                                            <small>REGISTROS</small>
                                            <h1 class="no-margins text-info">
                                                <?php
                                                $result = mysql_query($asistente_pago);
                                                $status = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-dollar fa-3x"></i></span>
                                        </span>
                                            <small>INGRESO</small>
                                            <h1 class="no-margins text-info">
                                                <?php
                                                $row = mysql_fetch_array($money_asistentes, MYSQL_ASSOC);
                                                $total = $row['total'];
                                                echo '<span class="font-bold">'.$total.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                            <br>
                                    </div>
                                    <a href="asistentes_pago">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-info" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

        <div class="row">
                <div class="col-lg-12">
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-default pull-right">INGRESOS</span>
                                            <h5>INSCRIPCIONES</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-ticket fa-3x"></i></span>
                                        </span>
                                            <small>REGISTROS</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($pago);
                                                $status = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    <br>
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-dollar fa-3x"></i></span>
                                        </span>
                                            <small>TOTAL</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $rows = mysql_fetch_array($money_grale, MYSQL_ASSOC);
                                                $valor = $rows['total'];
                                                echo '<span class="font-bold">'.$valor.'</span>';
                                                ?>
                                            </h1>
                                    <a href="pagado">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
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