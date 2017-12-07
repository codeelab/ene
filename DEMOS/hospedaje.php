<?php require 'model/model.php';
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ENE MORELIA | HOSPEDAJE</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/bootstrapValidator.min.css"/>
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body id="page-top" class="landing-page no-skin-config">
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
                    <a class="navbar-brand" href="index"><? echo $nombre_corto ?></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<?php
while($reg = mysql_fetch_array($menu)){
    $nombre_menu = mb_convert_encoding($reg['nombre'], "UTF-8");
    $url_menu = mb_convert_encoding($reg['url'], "UTF-8");
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
<div class="row">
<div class="col-lg-3">
    
</div>
    <div class="col-lg-6">
        <div class="carousel slide" id="carousel-example-captions" data-ride="carousel"> <ol class="carousel-indicators"> <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li> <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li> <li data-target="#carousel-example-captions" data-slide-to="2" class="active"></li> </ol> <div class="carousel-inner" role="listbox">

        <div class="item"> <img alt="900x500" src="assets/hotel/estefania/1.jpg" data-holder-rendered="true"></div>
        <div class="item"> <img alt="900x500" src="assets/hotel/estefania/2.jpg" data-holder-rendered="true"> <div class="carousel-caption"></div></div>

        <div class="item active"> <img alt="900x500" src="assets/hotel/estefania/3.jpg" data-holder-rendered="true"> <div class="carousel-caption"></div></div>

         </div> <a href="#carousel-example-captions" class="left carousel-control" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a href="#carousel-example-captions" class="right carousel-control" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    </div>
<div class="col-lg-3">
    
</div>
</div>
</section>


<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contacto</h1>
                <p><? echo $nombre_completo ?></p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
            <?
                echo '<address>';
                    echo '<strong><span class="navy">'.$nombre_corto.'</span></strong><br/>';
                    echo $direccion.'<br/>';
                    echo $colonia.'<br/>';
                    echo '<abbr title="Telefono">Teléfono:</abbr> '.$telefono.' / '.$telefonos.'</address>';
            ?>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Siguenos
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; <? echo date('Y').' '.$nombre_completo; ?> </strong><br/>
                <a href="http://codeelab.com/" target="_blank">CODEELAB</a> | <a href="http://unitechti.mx/" target="_blank">UNITECH <TIME></TIME></a>
        </div>
    </div>
</section>

<!-- Mainly scripts -->
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="assets/js/inspinia.js"></script>
<script src="assets/js/plugins/pace/pace.min.js"></script>
<script src="assets/js/plugins/wow/wow.min.js"></script>

<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93258404-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
