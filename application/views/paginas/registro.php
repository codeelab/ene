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


<div class="header-taller"></div>
<div class="col-lg-12 text-center">
     <h1>Solicitud de Registro <br> Foro Nacional de Educación Preescolar <?=date('Y') ?></h1>
</div>
<section class="container features animated fadeInRight">

    <div class="row">


        <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt="" src="http://lorempixel.com/100/100/people/9/">
                </div>
                <div class="info">
                    <div class="title">
                        <a href="alumno">Alumnos ENE<br><small>Nivel Licenciatura</small></a>
                    </div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-sm" href="alumno">
                        <i class="fa fa-send-o"></i> Registro
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt="" src="http://lorempixel.com/100/100/people/9/">
                </div>
                <div class="info">
                    <div class="title">
                        <a href="estudiante">Estudiantes<br><small>Nivel Licenciatura</small></a>
                    </div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-sm" href="estudiante">
                        <i class="fa fa-send-o"></i> Registro
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt="" src="http://lorempixel.com/100/100/people/9/">
                </div>
                <div class="info">
                    <div class="title">
                        <a href="tutora">Tutoras<br><small>4º Grado ENE</small></a>
                    </div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-sm" href="tutora">
                        <i class="fa fa-send-o"></i> Registro
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt="" src="http://lorempixel.com/100/100/people/9/">
                </div>
                <div class="info">
                    <div class="title">
                        <a href="particular">Particulares<br><small>Cualquier nivel académico</small></a>
                    </div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-sm" href="particular">
                        <i class="fa fa-send-o"></i> Registro
                    </a>
                </div>
            </div>
        </div>

    </div>

</section>