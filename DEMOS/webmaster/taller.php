<?php require('../model/model.php');
session_start();
if ($_SESSION["login"]=="Material" OR $_SESSION["login"]=="Estadistica" OR $_SESSION["login"]=="Contabilidad"){
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
                                        <span class="label label-info pull-right">Folio</span>
                                            <h5>Usuarios Inscritos</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome text-info">
                                            <span class="pull-right"><i class="fa fa-ticket fa-5x"></i></span>
                                        </span>
                                            <small>total</small>
                                            <h1 class="no-margins text-info">
                                                <?php
                                                $result = mysql_query($total);
                                                $numero = mysql_num_rows($result);
                                                echo '<span class="font-bold">'.$numero.'</span>';
                                                //echo $numero;
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="folio">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-info" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-primary pull-right">Folio</span>
                                            <h5>Registros Pagados</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome text-navy">
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
                                    <a href="pagado">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-primary" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
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
                                        <span class="icons-awesome text-warning">
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
                                    <a href="cancelados">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-warning" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
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
                                        <?php
                                        while($reg=mysql_fetch_array($taller)){

                                          echo '<p>'.substr($reg['nombres'],0,80).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small><center>Inscritos | Disponibles</center></small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller1);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="1">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller2)){

                                          echo '<p>'.substr($reg['nombres'],0,80).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller3);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo1)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="2">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller4)){

                                          echo '<p>'.substr($reg['nombres'],0,80).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller5);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo2)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="3">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller6)){

                                          echo '<p>'.substr($reg['nombres'],0,80).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller7);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo3)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="4">
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