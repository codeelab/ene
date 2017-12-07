<?php
echo '<div class="row">';
    while($reg = mysql_fetch_array($ponente)){
    $cod = $reg['id_ponente'];
    $imagen = $reg['imagen'];
    echo '<div class="col-sm-3 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"><div class="team-member">';

    echo '<img src="webmaster/img/avatars_ponentes/'.$imagen.'" class="img-responsive img-circle img-small" title="'.mb_convert_encoding($reg['nombre'], "UTF-8").'">';
    echo '<h4><span class="navy">'.$reg['nombre'].'</span>  | '.$reg['pais'].'</h4>';
    echo '<p>'.$reg['bio'].'</p>';
    echo '<ul class="list-inline social-icon">';
    echo '<li><a href="'.mb_convert_encoding($reg['twitter'], "UTF-8").'"><i class="fa fa-twitter"></i></a></li>';
    echo '<li><a href="'.mb_convert_encoding($reg['facebook'], "UTF-8").'"><i class="fa fa-facebook"></i></a></li>';
    echo '<li><a href="'.mb_convert_encoding($reg['instagram'], "UTF-8").'"><i class="fa fa-instagram"></i></a></li>';
    echo '<li><a href="'.mb_convert_encoding($reg['youtube'], "UTF-8").'"><i class="fa fa-youtube"></i></a></li>';
    echo '</ul></div></div>';
    }
    echo '</div>';
    ?>
<br><br>
<a href="ponentes" class="btn btn-primary btn-block m-t"><i class="fa fa-user"></i> Ver más</a>
