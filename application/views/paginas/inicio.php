<?php

foreach ($escuela as $e) {
    $convocatoria = $e->convocatoria;
}

 ?>



<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url();?>"><?=$title;?></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <?php
                        foreach ($menu as $m) {
                        $nombre_menu = mb_convert_encoding($m->nombre, "UTF-8");
                        $url_menu = mb_convert_encoding($m->url, "UTF-8");
                        echo '<li><a class="page-scroll" href="'.$url_menu.'">'.$nombre_menu.'</a></li>';
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </nav>
</div>


<?php $this->load->view('template/slider');;?>


<section class="container features">
<?=$convocatoria;?>
</section>

<section id="costos" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>COSTOS</h1>
            </div>
        </div>
        <div class="row">
        <?php
            foreach ($costo as $c) {
                echo '<div class="col-lg-4 wow zoomIn"><ul class="pricing-plan list-unstyled">';
                echo '<li class="pricing-title">Público General</li>';
                echo '<li class="pricing-price">';
                echo '<span style="font-size: 25px;">$'.mb_convert_encoding($c->costo_publico, "UTF-8").'</span></li><li>';
                echo '<a class="btn btn-primary btn-rounded btn-block" href="registro"><i class="fa fa-money"></i> Registro</a></li></ul></div>';

                //DATOS DEL EVENTO
                echo '<div class="col-lg-4 wow zoomIn"><ul class="pricing-plan list-unstyled selected">';
                echo '<li class="pricing-title">SEDE</li>';
                echo '<li class="pricing-price">';
                echo '<span style="font-size: 18px;">'.mb_convert_encoding($c->sede, "UTF-8").'</span></li><li>';
                echo '<a class="btn btn-primary btn-rounded btn-block" href="'.mb_convert_encoding($c->ubicacion, "UTF-8").'"><i class="fa fa-map-marker"></i> Ubicación</a></li></ul></div>';

                //DATOS DEL COSTO A ESTUDIANTES
                echo '<div class="col-lg-4 wow zoomIn"><ul class="pricing-plan list-unstyled">';
                echo '<li class="pricing-title">Estudiantes</li>';
                echo '<li class="pricing-price">';
                echo '<span style="font-size: 25px;">$'.mb_convert_encoding($c->costo_estudiante, "UTF-8").'</span></li><li>';
                echo '<a class="btn btn-primary btn-rounded btn-block" href="registro"><i class="fa fa-money"></i> Registro</a></li></ul></div>';
            }
        ?>
        </div>
    </div>

</section>


<section id="ponentes" class="gray-section team">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>PONENTES</h1>
            </div>
        </div>
            <?php
            echo '<div class="row">';
                foreach ($ponente as $p)
                {
                    if ($p->id_ponente <= 4) {

                        $cod = $p->id_ponente;
                        $imagen = $p->imagen;
                        echo '<div class="col-sm-3 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"><div class="team-member">';

                        echo '<img src="'.base_url().'assets/img/avatars_ponentes/'.$imagen.'" class="img-responsive img-circle img-small" title="'.mb_convert_encoding($p->nombre, "UTF-8").'">';
                        echo '<h4><span class="navy">'.$p->nombre.'</span>  | '.$p->pais.'</h4>';
                        //echo '<p>'.$p->bio.'</p>';
                        echo '<ul class="list-inline social-icon">';
                        echo '<li><a href="'.mb_convert_encoding($p->twitter, "UTF-8").'"><i class="fa fa-twitter"></i></a></li>';
                        echo '<li><a href="'.mb_convert_encoding($p->facebook, "UTF-8").'"><i class="fa fa-facebook"></i></a></li>';
                        echo '<li><a href="'.mb_convert_encoding($p->instagram, "UTF-8").'"><i class="fa fa-instagram"></i></a></li>';
                        echo '<li><a href="'.mb_convert_encoding($p->youtube, "UTF-8").'"><i class="fa fa-youtube"></i></a></li>';
                        echo '</ul></div></div>';
                    }
                }
            echo '</div>';
            ?>
        <a href="ponentes" class="btn btn-primary btn-block m-t"><i class="fa fa-user"></i> Ver más</a>
    </div>
</section>


<section id="taller" class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>TALLERES <? echo date('Y');?></h1>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-4 text-right m-t-n-lg wow zoomIn animated" style="visibility: visible;">
                <img src="<?=base_url();?>assets/img/circulo.png" class="img-responsive" alt="dashboard">
            </div>
            <div class="col-lg-8 features-text wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                <div class="container">
                    <div class="row">
                      <div class="slider">
                    <?php
                        foreach ($talleres as $t)
                        {
                            $texto = wordwrap($t->nombres, 65, "<br>");
                            echo '<h3>'.$texto.'</h3>';
                        }
                    ?>
                      </div>
                    </div>
                </div>
                <br>
                <br>
                <a href="talleres" class="btn btn-primary btn-block m-t">Ver más</a>
            </div>
        </div>
    </div>

</section>
