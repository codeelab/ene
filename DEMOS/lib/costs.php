<?php

echo '<div class="row">';
    while($reg = mysql_fetch_array($costo)){

        //DATOS DEL COSTO AL PUBLICO GENERAL
        echo '<div class="col-lg-4 wow zoomIn"><ul class="pricing-plan list-unstyled">';
        echo '<li class="pricing-title">Público General</li>';
        echo '<li class="pricing-price">';
        echo '<span style="font-size: 25px;">$'.mb_convert_encoding($reg['costo_publico'], "UTF-8").'</span></li><li>';
        echo '<a class="btn btn-primary btn-rounded btn-block" href="registro"><i class="fa fa-money"></i> Registro</a></li></ul></div>';

        //DATOS DEL EVENTO
        echo '<div class="col-lg-4 wow zoomIn"><ul class="pricing-plan list-unstyled selected">';
        echo '<li class="pricing-title">SEDE</li>';
        echo '<li class="pricing-price">';
        echo '<span style="font-size: 18px;">'.mb_convert_encoding($reg['sede'], "UTF-8").'</span></li><li>';
        echo '<a class="btn btn-primary btn-rounded btn-block" href="'.mb_convert_encoding($reg['ubicacion'], "UTF-8").'"><i class="fa fa-map-marker"></i> Ubicación</a></li></ul></div>';

        //DATOS DEL COSTO A ESTUDIANTES
        echo '<div class="col-lg-4 wow zoomIn"><ul class="pricing-plan list-unstyled">';
        echo '<li class="pricing-title">Estudiantes</li>';
        echo '<li class="pricing-price">';
        echo '<span style="font-size: 25px;">$'.mb_convert_encoding($reg['costo_estudiante'], "UTF-8").'</span></li><li>';
        echo '<a class="btn btn-primary btn-rounded btn-block" href="registro"><i class="fa fa-money"></i> Registro</a></li></ul></div>';
    }
    echo '</div>';
    ?>
