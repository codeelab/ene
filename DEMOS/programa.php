<?php require 'model/model.php';
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ENE MORELIA | TALLERES</title>

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
    <h1>PROGRAMA <? echo date('Y');?></h1>
    <div class="navy-line"></div>
</div>
<section class="container features">
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
                <a href="http://codeelab.com/" target="_blank">Codeelab</a>
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
