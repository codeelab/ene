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
    <h1>PROGRAMA <? echo date('Y');?></h1>
    <div class="navy-line"></div>
</div>
<section class="container features animated fadeInRight">

<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr style="font-size: 16px; font-family: Arial;">
          <th>TALLER</th>
          <th>PONENTE</th>
          <th>FECHA</th>
        </tr>
    </thead>
    <tbody style="font-size: 16px; font-family: Arial;">
        <tr>
            <td>“Música y movimiento. Despertando las neuronas con el arte” (Taller interactivo)</td>
            <td>Mtra. Elizabeth Andrade Pizaña</td>
            <td>Miercoles 05 abril 2017</td>
        </tr>
        <tr>
            <td>La tecnología y la innovación en el preescolar</td>
            <td>Mtra. Alejandra Calderón Swain</td>
            <td>Jueves 06 abril 2017</td>
        </tr>
        <tr>
            <td>El trastorno del déficit de atención: Una justificación a un diagnóstico mal empleado</td>
            <td>Lic. Oziel Isaac Mendoza García</td>
            <td>Miercoles 05 abril 2017</td>
        </tr>
        <tr>
            <td>El trabajo psicoanalítico con niños; el campo de acción de la educadora</td>
            <td>Lic. Oziel Isaac Mendoza García</td>
            <td>Jueves 06 abril 2017</td>
        </tr>
        <tr>
            <td>Prácticas sociales y pedagógicas con el lenguaje escrito en preescolar</td>
            <td>Mtra. Eva Itzel Báez Morales</td>
            <td>Miercoles 05 abril 2017</td>
        </tr>
        <tr>
            <td>Prácticas sociales y pedagógicas con el lenguaje escrito en preescolar</td>
            <td>Mtra. Sandra Hernández Aguilar</td>
            <td>Jueves 06 abril 2017</td>
        </tr>
        <tr>
            <td>Prueba articulatoria del desarrollo fonológico-fonético en niños de 3 a 6 años</td>
            <td>Mtra. Eva María Vázquez Oliveros</td>
            <td>Miercoles 05 y Jueves 06 de abril 2017</td>
        </tr>
        <tr>
            <td>El tiempo y el espacio en preescolar: Cambiando las costumbres pedagógicas.</td>
            <td>Lic. Luz Paloma Vaca Blancas</td>
            <td>Miercoles 05 y Jueves 06 de abril 2017</td>
        </tr>
        <tr>
            <td>El manejo de las emociones a través del arte</td>
            <td>L. Psic. Claudia Fabiola Tello Avellaneda</td>
            <td>Miercoles 05 y Jueves 06 de abril 2017</td>
        </tr>
    </tbody>

</table>


</section>