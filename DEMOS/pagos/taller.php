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
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
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

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos / Disponibles</small>
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

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos / Disponibles</small>
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

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos / Disponibles</small>
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

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller8)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
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
                                                $result = mysql_query($taller9);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo4)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="5">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller10)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos / Disponibles</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller11);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo5)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="6">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller12)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos | Disponibles</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller13);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo6)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="7">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller14)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos | Disponibles</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller15);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo7)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="8">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller16)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
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
                                                $result = mysql_query($taller17);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo8)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="9">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller18)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos | Disponibles</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller19);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo9)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="10">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller20)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos | Disponibles</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller21);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo10)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="11">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller22)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos | Disponibles</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller23);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo11)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="12">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller24)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
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
                                                $result = mysql_query($taller25);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo12)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="13">
                                    <button class="btn btn-block btn-outline ladda-button ladda-button-check btn btn-default" data-style="expand-right"><i class="fa fa-eye" aria-hidden="true"></i>   Ver</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <?php
                                        while($reg=mysql_fetch_array($taller26)){

                                          echo '<p>'.substr($reg['nombres'],0,100).'</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="ibox-content">
                                        <span class="icons-awesome">
                                            <span class="pull-right"><i class="fa fa-users fa-5x"></i></span>
                                        </span>
                                            <small>Inscritos | Disponibles</small>
                                            <h1 class="no-margins text-default">
                                                <?php
                                                $result = mysql_query($taller27);
                                                $status = mysql_num_rows($result);
                                                while($row = mysql_fetch_array($cupo13)) {
                                                echo '<span class="font-bold"><center>'.$status.' / '.$row['cupo'].'</center></span>';
                                                }
                                                ?>
                                            </h1>
                                    </div>
                                    <a href="14">
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

    <?php include("theme/footer.php");?>