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
                        echo '<li><a class="page-scroll" href="../'.$url_menu.'">'.$nombre_menu.'</a></li>';
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </nav>
</div>


<div class="header-taller"></div>
<div class="col-lg-12 text-center">
     <h1>Solicitud de Registro a Tutoras <br> Foro Nacional de Educación Preescolar <?=date('Y') ?></h1>
</div>
<section class="container features animated fadeInRight">

<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="alert alert-warning">
              <strong>Aviso!</strong> Estimado usuario(a), una vez registrado en el Foro Nacional de Educación Preescolar se le enviará un correo electrónico de registro con los datos de pago, los tiempos estimados de llegada son de <b>1 a 30 minutos</b>, en caso de no recibir respuesta, favor de comunicarse al siguiente correo: <b>foroenemorelia@gmail.com</b></a>
            </div>
        </div>

        <div class="col-lg-12 col-md-6 col-xs-12 col-sm-12">

        <?php $attributes = array('class' => 'form-horizontal' ,'id'=>'registro'); ?>
        <?php echo form_open('registro/registro_tutora', $attributes); ?>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <label class="control-label"><p class="text-uppercase text-form">Escuela:</p></label>
                     <?php echo form_dropdown('escuela_id', $instituto, set_value('escuela_id'), 'id="escuela_id" class="form-control m-b"'); ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                   <label class="control-label"><p class="text-uppercase text-form">Nombre:</p></label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" autocomplete="off"  value="<?php echo set_value('nombre'); ?>">
                    <?php echo form_error('nombre', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                   <label class="control-label"><p class="text-uppercase text-form">Apellido Paterno:</p></label>
                    <input type="text" name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" class="form-control" autocomplete="off" value="<?php echo set_value('a_paterno'); ?>" >
                    <?php echo form_error('a_paterno', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <label class="control-label"><p class="text-uppercase text-form">Apellido Materno:</p></label>
                    <input type="text" name="a_materno" id="a_materno" placeholder="Apellido Materno" class="form-control" autocomplete="off" value="<?php echo set_value('a_materno'); ?>" >
                    <?php echo form_error('a_materno', '<div class="text-danger">', '</div>'); ?>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <label class="control-label"><p class="text-uppercase text-form">Correo Personal:</p></label>
                    <input type="email" name="c_personal" id="c_personal" placeholder="Correo Personal" class="form-control" autocomplete="off" value="<?php echo set_value('c_personal'); ?>">
                    <?php echo form_error('c_personal', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="col-md-6">
                   <label class="control-label"><p class="text-uppercase text-form">Confirmar Correo:</p></label>
                    <input type="email" name="c_personal2" id="c_personal2" placeholder="Correo Personal" class="form-control" autocomplete="off" value="<?php echo set_value('c_personal'); ?>">
                    <?php echo form_error('c_personal2', '<div class="text-danger">', '</div>'); ?>
                </div>

            </div>

        <div class="row">
            <div class="col-md-3">
                <label class="form-text" for="usuario"><p class="text-uppercase text-form">Usuario</p></label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>" placeholder="Usuario">
                <span id="Loading"><img src="<?=base_url();?>assets/img/loader.gif" /></span>
                <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="col-md-3">
                <label class="form-text" for="password"><p class="text-uppercase text-form">Contraseña</p></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" data-bv-integer-message="Solo está permitido el uso de caracteres alfanuméricos">
                <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                <div class="progress password-progress form-progres">
                    <div id="strengthBar" class="progress-bar" role="progressbar" style="width: 0;"></div>
                </div>
            </div>
            <div class="col-md-3">
                <label class="form-text" for="password"><p class="text-uppercase text-form">Confirmar Contraseña</p></label>
                <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirmar Contraseña">
                <?php echo form_error('password2', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="col-md-3">
                    <div class="checkbox checbox-switch switch-success">
                        <label>
                            <?php echo form_checkbox('terminos', '1', 'id="terminos"', set_value('terminos'));?>
                            <?php echo form_error('terminos', '<div class="text-danger">', '</div>'); ?>
                            <span></span>
                            <p class="text-uppercase text-form"><b>Acepto decir la verdad</b></p>
                        </label>
                    </div>
            </div>
        </div>
<br>
            <input type="hidden" class="form-control" id="rol_id" name="rol_id" value="6">
            <input type="hidden" class="form-control" id="status_id" name="status_id" value="1">
            <button class="btn btn-block btn-rounded ladda-button ladda-button-check btn btn-primary" type="submit">Enviar</button>
        <?php echo form_close();?>

        </div>
    </div>

<br>
<br>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <?php if($this->session->flashdata('success')){ ?>
                    <div class="alert alert-success">
                        <strong>Genial!</strong> <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php }else if($this->session->flashdata('error')){  ?>
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>
</div>
</div>
</section>
