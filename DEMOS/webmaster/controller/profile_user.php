<div class="row m-b-lg m-t-lg">
                <div class="col-md-6">

                    <div class="profile-image">
                        <img src="img/avatars_usuarios/<?php echo $_SESSION["avatar"]; ?>" class="img-circle circle-border m-b-md" title="<?php echo $_SESSION["nombre"]." ".$_SESSION["apaterno"] ." ".$_SESSION["amaterno"]; ?>">
                    </div>
                    <div class="profile-info">
                        <div class="">
                            <div>
                                <h2 class="no-margins">
                                     <?php echo $_SESSION["nombre"]." ".$_SESSION["apaterno"] ." ".$_SESSION["amaterno"]; ?>
                                </h2>
                                <h4><?php echo $_SESSION["profesion"]; ?></h4>
                                <small>
                                <?php echo $_SESSION["shortbio"]; ?>
                                </small>
                            </div>
                        </div>
                    </div>
<?php
    while($reg=  mysql_fetch_array($updatePro)){
    $id=$reg['id'];
    echo '<a><button type="button" class="btn btn-default btn-sm btn-block" rel='.$id.' data-toggle="modal" data-target="#user"><i class="fa fa-edit"></i> Editar</button></a>';
}?>
                </div>
                <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <ul class="list-unstyled file-list">
                            <li><i class="fa fa-envelope-o"></i>   <?php echo $_SESSION["email"]; ?></li>
                            <li><i class="fa fa-phone"></i>   <?php echo $_SESSION["phone"]; ?></li>
                            <li><i class="fa fa-graduation-cap"></i>   <?php echo $_SESSION["profesion"]; ?></li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content">
                        <p>Usuarios</p>
                            <div class="user-friends">
                        <?php
                        while($reg = mysql_fetch_array($profile)){
                            $imagen = $reg['avatar'];
                            $nombre = $reg['nombre'];
                            echo '<tr>';
                            echo  '<td ><img src="img/avatars_usuarios/'.$imagen.'" height="25" width="25" class="img-circle" title="'.$nombre.'"></td>';
                            echo '</tr>';
                            }
                        ?>

                            </div>
                        </div>
                    </div>
                </div>
</div>
