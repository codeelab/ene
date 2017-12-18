<div class="header-taller"></div>
<div class="col-lg-12 text-center">
     <h1>Solicitud de Registros <br> Foro Nacional de Educación Preescolar <?=date('Y') ?></h1>
</div>
<section class="container features animated fadeInRight">

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-xs-12 col-sm-12">
            <?php if($this->session->flashdata('success')){ ?>
            <div class="jumbotron">
              <h1 class="text-form"><?php echo $this->session->flashdata('success'); ?></h1>
            <?php } ?>
              <p class="text-p">Gracias! Pronto recibirás un correo de confirmación con los datos de acceso.</p>
              <p><a class="btn btn-primary btn-lg" href="login" role="button">¿Iniciar Sesión?</a> <a class="btn btn-primary btn-lg" href="registro" role="button">¿Deseas un nuevo registro?</a></p>
            </div>

        </div>
    </div>
</div>
</section>
