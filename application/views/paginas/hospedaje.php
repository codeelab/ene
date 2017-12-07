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
    <h1>HOSPEDAJE <? echo date('Y');?></h1>
    <div class="navy-line"></div>
</div>
<section class="container features">
<div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>HOTEL ESTEFANÍA</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Dirección</a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                Plan de Ayala # 874, Col. Centro  Entre Luis Moya y Carillo Puerto.<br>
                                                Tel: (443) 3 12 82 52 - 3 12 52 06 <br>
                                                Lada sin Costo: 01 800 633 21 01
                                                <br>
                                                www.hotelestefania.com
                                                <br>
                                                Morelia, Michoacán, México.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Tarifas</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                            HAB. SENC. (1 CAMA MAT. 1 o 2 PERS) $450.00 <br>
                                            HAB. DBL.  (2 CAMAS MATS. 2 a 4 PERS) $650.00 <br>
                                            LAS TARIFAS SON POR HABITACIÓN POR NOCHE E INCLUYEN: IMPUESTOS, DESAYUNO CONTINENTAL Y WI-FI<br>
                                            Contamos con 16 habitaciones, céntrica ubicación, espacio para estacionamiento privado (costo extra), categoría 3 estrellas.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="jumbotron">
                        <img src="assets/hotel/estefania/map.jpg" alt="" class="img-thumbnail">
                    </div>
                </div>
            </div>
<div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>HOTEL HORIZON</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsesOne">Dirección</a>
                                            </h5>
                                        </div>
                                        <div id="collapsesOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                Periférico Paseo de la República #3325 Frac. Poblado Ocolusen. C.P. 58270.<br>
                                                Horario de oficina: 9:00 a 14:00 y 16:00 a 19:00 Lunes a Viernes, Sabados de 9:00 a 14:00 Hrs<br>
                                                Tel. 443 113 1505<br>
                                                Lada sin costo: 01 800 455 5000
                                                <br>
                                                www.horizon.mx
                                                <br>
                                                Morelia, Michoacán, México.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsesTwo">Tarifas</a>
                                            </h4>
                                        </div>
                                        <div id="collapsesTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                            <b>Habitación Sencilla</b> (1 persona)<br><b>Tarifa Pública</b> $1,351.00 <br> <b>Tarifa Especial invitados</b> $920.00
                                            <br>
                                            <b>Habitación Doble</b> (2 personas)<br><b>Tarifa Pública</b> $1,410.00 <br> <b>Tarifa Especial invitados</b> $920.00
                                            <br>
                                            <b>Habitación Triple</b> (2 camas matrimoniales)<br><b>Tarifa Pública</b> $1,670.00 <br> <b>Tarifa Especial invitados</b> $1,180.00
                                            <br>
                                            <b>Habitación Cuádruple</b> (2 camas matrimoniales)<br><b>Tarifa Pública</b> $1,930.00 <br> <b>Tarifa Especial invitados</b> $1,440.00
                                            <br>
                                            <b>Nota:</b> Vigencia al 7 de Abril del 2017<br>
                                            Especificaciones:
                                            <ul>
                                                <ol>Tarifa YA incluye impuestos (16% IVA y 2% ISH)</ol>
                                                <ol>Tarifa con desayuno americano incluido en horario de 7:00 a 10:00 am, posterior a este horario tendrá un precio de $130.00 por persona</ol>
                                                <ol>Llamadas locales y Nacionales gratuitas</ol>
                                                <ol>Servicio de transportación GRATIS (Solo IDA) a una distancia no mayor a 10 km del Hotel. Hay tres horarios de salida 7:00, 8:00 y 9:00 am, agendar su transporte una noche antes en recepción.</ol>
                                            </ul>
                                            <br>
                                            Le recomendamos hacer sus reservaciones con la debida anticipación, ya que en fechas de alta ocupación, el Hotel se reserva el derecho de aceptar las tarifas de convenio.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="jumbotron">
                        <img src="assets/hotel/estefania/map.jpg" alt="" class="img-thumbnail">
                    </div>
                </div>
            </div>

</section>