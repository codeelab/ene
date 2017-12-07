<?php require('../model/model.php');
session_start();
if ($_SESSION["login"]==""){
    header("location: index");

}else if($_SESSION["login"]=="Administrador" or $_SESSION["login"]=="Material" or $_SESSION["login"]=="Estadistica"){
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
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-default pull-right">Ticket</span>
                                            <h5>Registros</h5>
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
                                        <span class="label label-success pull-right">Ticket</span>
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
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-primary pull-right">Ticket</span>
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
                        </div>
                </div>
                <div class="col-lg-12">
                        <div class="row">

                        </div>
                </div>
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-danger pull-right">Ticket</span>
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
                                                $hay = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$status.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                </div>
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-warning pull-right">Ticket</span>
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
                            <div class="col-lg-9">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <i class="fa fa-ticket fa-2x pull-left"></i>
                                        <h5>Lista de Solicitudes Pendientes ( <? echo $hay; ?> )</h5>
                                    </div>
                                    <div class="ibox-content">
                <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="actualiza">
                    <thead>
                        <tr>
                            <th>Folio</th>
                            <th class="visible-lg">Nombre</th>
                            <th>Solicitud</th>
                            <th>Estado</th>
                            <th class="visible-lg">Fecha de Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $cont=0;
                        while($reg=  mysql_fetch_array($listado)){
                        if($reg['status']==0){
                            $status="<div class='pendiente-adm'></div><span class='label label-default' style='margin: 20%;'> Pendiente</span>";
                        }else if($reg['status']==1){
                            $status="<div class='pagado-adm'></div><span class='label label-default' style='margin: 20%;'>Pagado</span>";
                        }else
                            $status="<div class='cancelado-adm'></div><span class='label label-default' style='margin: 20%;'>Cancelado</span>";
                                echo '<tr>';
                                        echo '<td> <span class="badge"><i class="fa fa-ticket"></i> FNEP'.date('Y').'-'.mb_convert_encoding($reg['id_publico'], "UTF-8").'</span></td>';
                                        echo '<td class="visible-lg"><i class="fa fa-address-card-o"></i>  '.$reg['nombre'].' '.$reg['a_paterno'].' '.$reg['a_materno'] . '</td>';
                                    if($reg['tipo']==1){
                                        $tipo="Alumno ENE";
                                        echo '<td style="margin: 25px;"><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
                                        echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
                                    }else if ($reg['tipo']==2){
                                        $tipo="Estudiante";
                                        echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
                                        echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
                                    }else if ($reg['tipo']==3){
                                        $tipo="Tutora";
                                        echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
                                        echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
                                    }else if ($reg['tipo']==4){
                                        $tipo="Asistente";
                                        echo '<td ><h4><i class="fa fa-user-o"></i>  '.mb_convert_encoding($tipo, "UTF-8").'</h4></td>';
                                        echo '<td >'.mb_convert_encoding($status, "UTF-8").'</td>';
                                    }
                                    $cont++;
                                        echo '<td class="visible-lg"><i class="fa fa-clock-o">  '.mb_convert_encoding($reg['fecha'], "UTF-8").'</i></td>';
                                        echo '</tr>';
                        }
                    ?>
                    </tbody>
            </table><br>
                <a href="folio"><button class="btn btn-block btn-outline btn-danger" data-style="expand-right">  Ver más</button></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>
    <?php include("theme/footer.php");?>
