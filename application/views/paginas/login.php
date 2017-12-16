<div class="header-taller"></div>
<div class="col-lg-12 text-center">
     <h1>ACCESO A USUARIOS</h1>
</div>
<section class="container features animated fadeInRight">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6col-xs-6">
             <img src="<?=base_url();?>assets/img/circulo.png" class="img-responsive" alt="dashboard">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6col-xs-6">
                <div class="ibox-content">
                    <?=form_open(base_url().'login/acceso')?>
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" >
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Ingreso</button>

                     <?php echo form_close(); ?>

                </div>

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
        <hr/>
    </div>

</section>