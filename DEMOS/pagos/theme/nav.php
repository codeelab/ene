<?php
$result = mysql_query($pendiente);
$hay = mysql_num_rows($result);

$result2 = mysql_query($pago);
$hay2 = mysql_num_rows($result2);

$result3 = mysql_query($cancelado);
$hay3 = mysql_num_rows($result3);

$result4 = mysql_query($eliminado);
$hay4 = mysql_num_rows($result4);
?>
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/avatars_usuarios/<?php echo $_SESSION["avatar"]; ?>" width="120" height="120"/>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION["nombre"]." ".$_SESSION["apaterno"]." ".$_SESSION["amaterno"]; ?></strong>
                             </span></a>
                        </div>
                        <div class="logo-element">
                            <img alt="image" class="img-circle" src="img/avatars_usuarios/<?php echo $_SESSION["avatar"]; ?>" width="60" height="60"/>
                        </div>
                    </li>
                    <li class="special_link">
                        <a href="index"><i class="fa fa-dashboard fa-fw"></i> <span class="nav-label">Administración</span></a>
                    </li>
                    <li>
                        <a href="verificador"><i class="fa fa-ticket fa-w"></i><span class="nav-label">Checador de Estados</span></a>
                    </li>
                    <li>
                        <a href="baja"><i class="fa fa-user fa-w"></i><span class="nav-label">Folios En Baja</span><span class="label label-danger pull-right"><? echo $hay4; ?></span></a>
                    </li>
                   <li>
                    <a href="pagado"><i class="fa fa-ticket fa-w"></i> <span class="nav-label">Folios Pagados </span><span class="label label-info pull-right"><? echo $hay2; ?></span></a>
                   </li>
                    <li>
                        <a href="cancelado"><i class="fa fa-warning fa-w"></i><span class="nav-label">Folios Cancelados</span><span class="label label-warning pull-right"><? echo $hay3; ?></span></a>
                    </li>
                    <!--
                    <li>
                        <a href="deposito"><i class="fa fa-money fa-w"></i> <span class="nav-label">Registro Deposito</span></a>
                    </li>
                    
                   <li>
                    <a href="folio"><i class="fa fa-ticket fa-w"></i> <span class="nav-label">Folios Pendientes </span><span class="label label-danger pull-right"><? echo $hay; ?></span></a>
                   </li>
                <li>
                    <a href="alumno"><i class="fa fa-pencil fa-w"></i> <span class="nav-label">Registro Alumnas ENE </span></a>
                </li>
                <li>
                    <a href="institucion"><i class="fa fa-pencil fa-w"></i> <span class="nav-label">Registro Estudiantes </span></a>
                </li>
                <li>
                    <a href="calidad"><i class="fa fa-pencil fa-w"></i> <span class="nav-label">Registro Tutoras </span></a>
                </li>
                <li>
                    <a href="asistente"><i class="fa fa-pencil fa-w"></i> <span class="nav-label">Registro Participantes </span></a>
                </li>
                -->
                <li>
                    <a href="lib/logout"><i class="fa fa-power-off fa-w"></i> <span class="nav-label">Cerrar Sesión</span></a>
                </li>
                </ul>
            </div>
        </nav>