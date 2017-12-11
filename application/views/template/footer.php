<?php

foreach ($escuela as $e) {
    $nombre_completo = $e->nombre_completo;
    $nombre_corto = $e->nombre_corto;
    $direccion = $e->direccion;
    $colonia = $e->colonia;
    $telefono = $e->telefono1;
    $telefonos = $e->telefono2;
}

 ?>
<section id="contacto" class="gray-section contact">
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
                <a href="http://codeelab.com/" target="_blank">Codeelab</p>
            </div>
        </div>
    </div>
</section>

<!-- Mainly scripts -->
<script src="<?=base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery.easy-autocomplete.min.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/js/bootstrapValidator.min.js"></script>
<script src="<?=base_url();?>assets/js/zxcvbn.js"></script>
<script src="<?=base_url();?>assets/js/funciones.js"></script>
<script src="<?=base_url();?>assets/js/slick.js"></script>
<script src="<?=base_url();?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?=base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?=base_url();?>assets/js/inspinia.js"></script>
<script src="<?=base_url();?>assets/js/plugins/pace/pace.min.js"></script>
<script src="<?=base_url();?>assets/js/plugins/wow/wow.min.js"></script>

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

        var options = {

          url: "<?=base_url();?>registro/buscarAlumno",

          getValue: "matricula",

          list: {
            showAnimation:
            {
                type: "fade", //normal|slide|fade
                time: 400,
                callback: function() {}
            },

            hideAnimation:
            {
                type: "slide", //normal|slide|fade
                time: 400,
                callback: function() {}
            },
              maxNumberOfElements: 1,
              match: {
              enabled: true
            }
          }
        };

        $("#matricula").easyAutocomplete(options);


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


    $('.slider').slick({
        adaptiveHeight: true,
        vertical: true,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 300,
        arrows: false
    });
</script>



</body>
</html>