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
     <h1>Solicitud de Registro Alumna ENE <br> Foro Nacional de Educación Preescolar <?=date('Y') ?></h1>
</div>
<section class="container features animated fadeInRight">

<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12 col-md-6 col-xs-12 col-sm-12">
            <div class="alert alert-warning">
              <strong>Aviso!</strong> Estimado usuario(a), una vez registrado en el Foro Nacional de Educación Preescolar se le enviará un correo electrónico de registro con los datos de pago, los tiempos estimados de llegada son de <b>1 a 30 minutos</b>, en caso de no recibir respuesta, favor de comunicarse al siguiente correo: <b>foroenemorelia@gmail.com</b></a>
            </div>
        </div>

        <div class="col-lg-12 col-md-6 col-xs-12 col-sm-12">

        <?php $attributes = array('class' => 'form-horizontal'); ?>
        <?php echo form_open('registro/registro_alumno', $attributes); ?>

            <div class="form-group">
                <label class="col-sm-2 control-label">
                    <small class="text-uppercase text-muted">Matricula:</small>
                </label>
                <div class="col-sm-4">
                    <input type="text" name="matricula" id="matricula" placeholder="Matricula" class="form-control" >
                    <?php echo form_error('matricula'); ?>
                </div>
                <label class="col-sm-2 control-label">
                    <small class="text-uppercase text-muted">Correo Personal:</small>
                </label>
                <div class="col-sm-4">
                    <input type="email" name="c_personal" id="c_personal" placeholder="Correo Personal" class="form-control" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">
                    <small class="text-uppercase text-muted">Nombre:</small>
                </label>
                <div class="col-sm-4">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" autocomplete="off" readonly>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" class="form-control" autocomplete="off" readonly>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="a_materno" id="a_materno" placeholder="Apellido Materno" class="form-control" autocomplete="off" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">
                    <small class="text-uppercase text-muted">Elija Taller</small>
                </label>
                <div class="col-sm-6">
                    <select class="form-control m-b" name="taller" id="taller">
                      <option value="">---</option>
                      <?php
                      if($talleres !== FALSE)
                      {
                            foreach ($talleres as $t) {
                                $cupo = $t->cupo;
                                if ($cupo > 0)
                                {
                                     echo '<option value="'.$t->id_taller.'">'.$t->nombres.'</option>';
                                }else{
                                    echo '';
                                }
                            }
                        }else{
                            echo '<option value="">---</option>';
                        }

                      ?>

                    </select>
                </div>
                <label class="col-sm-2 control-label">
                    <small class="text-uppercase text-muted">Disponibilidad</small>
                </label>
                <div class="col-sm-2"><input type="text" class="form-control"  id="cupo" readonly>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">
                    <small class="text-uppercase text-muted">Ficha:</small>
                </label>
                <div class="col-sm-3">
                    <input type="text" name="nombre" id="nombre" placeholder="# Movimiento Ficha de Pago" class="form-control" autocomplete="off">
                </div>
                <label class="col-sm-2 control-label">
                    <small class="text-uppercase text-muted">Documento:</small>
                </label>
                <div class="col-sm-4">
                    <input class="form-control" type="file" name="picture" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">
                    <small class="text-uppercase text-muted">Por que medio te enteraste del foro?</small>
                </label>
                <div class="col-sm-4">
                    <select class="form-control m-b" name="medio" id="medio">
                        <option value="">---</option>
                      <?php
                      if($medios !== FALSE)
                      {
                            foreach ($medios as $m)
                            {

                                echo '<option value="'.$m->id_medio.'">'.$m->nombre_medio.'</option>';
                            }

                        }else{
                            echo '<option value="">---</option>';
                        }

                      ?>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="checkbox checbox-switch switch-success">
                        <label>
                            <input type="checkbox" name="acepto" id="acepto"/>
                            <span></span>
                            <small class="text-uppercase text-muted"><b>Acepto decir la verdad</b></small>
                        </label>
                    </div>
                </div>
            </div>



            <button class="btn btn-block btn-rounded ladda-button ladda-button-check btn btn-primary" type="submit" name="submit">Enviar</button>
        <?php echo form_close();?>

        </div>
    </div>

<br>
<br>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <?php if($this->session->flashdata('error')){  ?>
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> <?php echo $this->session->flashdata('error'); ?>
                    </div>
            <?php } ?>
</div>
</div>
<?php echo validation_errors();?>

</section>