<?php
$result = mysql_query($materialPa);
$hay = mysql_num_rows($result);
$results = mysql_query($material);
$hay2 = mysql_num_rows($results);
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
                        <a href="profile"><i class="fa fa-user-circle-o"></i><span class="nav-label">Perfil</span></a>
                    </li>
                   <li>
                    <a href="folio"><i class="fa fa-ticket fa-w"></i> <span class="nav-label">Material Pendiente </span><span class="label label-danger pull-right"><? echo $hay; ?></span></a>
                   </li>
                   <li>
                    <a href="folios_entregados"><i class="fa fa-ticket fa-w"></i> <span class="nav-label">Material Entregado </span><span class="label label-info pull-right"><? echo $hay2; ?></span></a>
                   </li>
                <li>
                    <a href="lib/logout"><i class="fa fa-power-off fa-w"></i> <span class="nav-label">Cerrar Sesión</span></a>
                </li>
                </ul>
            </div>
        </nav>