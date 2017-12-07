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
    <h1>TALLERES <? echo date('Y');?></h1>
    <div class="navy-line"></div>
</div>
<section class="container features animated fadeInRight">

<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr style="font-size: 16px; font-family: Arial;">
          <th>Nombre</th>
          <th>Espacios Disponibles</th>
          <th>Inscripción</th>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach ($talleres as $t) {
                $hay = $t->cupo;
                if($t->cupo == 0){
                  $cupo="<div class='pendiente-adm'></div><span class='label label-default' style='margin: 15%;'>Agotado</span>";
                }else
                $cupo="<div class='pagado-adm'></div><span class='label label-default' style='margin: 15%;'>".$hay." Disponibles</span>";

                echo '<tr style="font-size: 16px; font-family: Arial;">';
                echo '<td>'.$t->nombres.'</td>';
                echo '<td>'.$cupo.'</td>';
                echo '<td><a href="registro" class="btn btn-warning btn-xs dropdown-toggle">Registro</a></td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>

</section>