<div class="header-taller"></div>
<div class="col-lg-12 text-center">
    <h1>PONENTES <? echo date('Y');?></h1>
    <div class="navy-line"></div>
</div>
<section class="container features animated fadeInRight">
<br><br>


<div class="container">
    <div class="row">
<?php

    foreach ($ponente as $p)
    {
        if ($p->id_ponente > 0)
        {
            $imag = $p->imagen;
            if ($imag != '') {
               $imagen = base_url().'assets/img/avatars_ponentes/default.jpg';
            }else{
                 $imagen = base_url().'assets/img/avatars_ponentes/'.$imag;
            }
            echo '
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">

                    <div class="card hovercard">
                        <div class="cardheader">

                        </div>
                        <div class="avatar">
                            <img src="'.$imagen.'" class="img-circle circle-border m-b-md" title="'.$p->nombre.'">
                        </div>
                        <div class="info" style="text-align: justify; text-justify: inter-word;">
                            <div class="title">
                                <a href="#">'.$p->nombre.'</a>
                            </div>
                            <div class="desc"><b>Institución: </b>'.$p->institucion.'</div>
                            <div class="desc"><b>País: </b>'.$p->pais.'</div>
                            <div class="desc"><b>Ponencia: </b>'.$p->fecha.'</div>
                            <div class="desc"><b>Biografía: </b>'.$p->bio.'</div>
                        </div>
                    </div>

                </div>';

        }
    }

    ?>
    </div>
</div>

</section>