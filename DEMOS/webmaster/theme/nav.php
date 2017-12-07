<?php
$result = mysql_query($pendiente);
$hay = mysql_num_rows($result);

$result2 = mysql_query($pago);
$hay2 = mysql_num_rows($result2);

$result3 = mysql_query($cancelado);
$hay3 = mysql_num_rows($result3);

$result4 = mysql_query($eliminado);
$hay4 = mysql_num_rows($result4);

$row = mysql_fetch_array($money_gral, MYSQL_ASSOC);
$valor = $row['total'];
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
                        <a href="data"><i class="fa fa-edit fa-fw"></i><span class="nav-label">Institución</span></a>
                    </li>
                   <li>
                    <a href="folio"><i class="fa fa-ticket fa-w"></i> <span class="nav-label">Folios Pendientes </span><span class="label label-success pull-right"><? echo $hay; ?></span></a>
                   </li>
                   <li>
                    <a href="pagado"><i class="fa fa-ticket fa-w"></i> <span class="nav-label">Folios Pagados </span><span class="label label-info pull-right"><? echo $hay2; ?></span></a>
                   </li>
                    <li>
                        <a href="cancelados"><i class="fa fa-warning fa-w"></i><span class="nav-label">Folios Cancelados</span><span class="label label-warning pull-right"><? echo $hay3; ?></span></a>
                    </li>
                    <li>
                        <a href="eliminados"><i class="fa fa-trash-o fa-w"></i><span class="nav-label">Folios Eliminados</span><span class="label label-danger pull-right"><? echo $hay4; ?></span></a>
                    </li>
                   <li>
                    <a href="general"><i class="fa fa-bar-chart fa-w"></i> <span class="nav-label">Estadisticas </span></a>
                   </li>
                   <li>
                    <a href="ingresos"><i class="fa fa-dollar fa-w"></i> <span class="nav-label">Ingresos </span><span class="label label-info pull-right">$ <? echo $valor; ?></span></a>
                   </li>
                <li>
                    <a href="taller"><i class="fa fa-list fa-w"></i> <span class="nav-label">Talleres </span></a>
                </li>
                    <li>
                        <a href="correos"><i class="fa fa-envelope-o fa-w"></i><span class="nav-label">Correos</span></a>
                    </li>
                    <li>
                        <a href="usuarios"><i class="fa fa-users fa-w"></i><span class="nav-label">Usuarios</span></a>
                    </li>
                <li>
                    <a href="lib/logout"><i class="fa fa-power-off fa-w"></i> <span class="nav-label">Cerrar Sesión</span></a>
                </li>
                </ul>
            </div>
        </nav>