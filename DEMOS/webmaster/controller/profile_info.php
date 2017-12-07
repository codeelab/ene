<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-lg-12">
                    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>REGISTRO DE INFORMACIÓN CONTACTO</h5>
        </div>
                        <div class="ibox-content">
        <form role="form" class="form-horizontal" action="lib/insert_insti.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre Institución:</label>
                        <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i></span>
                        <input type="text" name="nombre_completo" autocomplete="off" placeholder="Nombre Completo Institucional" class="form-control" value="<?php echo $nombre_completo; ?>"></div></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre Corto:</label>
                        <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i></span>
                        <input type="text" name="nombre_corto" autocomplete="off" placeholder="Nombre Corto Institucional" class="form-control" value="<?php echo $nombre_corto; ?>"></div></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dirección:</label>
                    <div class="col-sm-4">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <input type="text" name="direccion" placeholder="Domicilio de la Institución" class="form-control" autocomplete="off" value="<?php echo $direccion; ?>"></div></div>
                        <label class="col-sm-2 control-label">Colonia:</label>
                    <div class="col-sm-4">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                        <input type="text" name="colonia" placeholder="Domicilio de la Institución" class="form-control" autocomplete="off" value="<?php echo $colonia; ?>"></div></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Telefono:</label>
                    <div class="col-sm-4">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <input type="text" name="telefono1" placeholder="telefono" class="form-control" autocomplete="off" value="<?php echo $telefono; ?>"></div></div>
                        <label class="col-sm-2 control-label">Fax:</label>
                    <div class="col-sm-4">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-fax" aria-hidden="true"></i></span>
                        <input type="text" name="telefono2" placeholder="Fax" class="form-control" autocomplete="off" value="<?php echo $telefonos; ?>"></div></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Convocatoria:</label>
                    <div class="col-sm-10">
                    <div class="ibox-content no-padding">

    <textarea name="convocatoria" style="width: 100%;">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h2>EL GOBIERNO DEL ESTADO DE MICHOAC&Aacute;N DE OCAMPO,A TRAV&Eacute;S DE LA SECRETAR&Iacute;A DE EDUCACI&Oacute;N,</h2>
            <h1>C O N V O C A<h1>
        </div>
    </div>
    <div class="row features-block">
        <div class="col-lg-12 features-text wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
            <p style="font-size: 22px;">Al concurso de selecci&oacute;n de aspirantes de nuevo ingreso a la licenciatura correspondiente al plan de estudios 2012 para la Formaci&oacute;n de Docentes de Educaci&oacute;n Preescolar, para 120 matr&iacute;culas, en la Escuela Normal para Educadoras &#8221;Prof. Serafín Contreras Manzo&#8222; de Morelia, Michoac&aacute;n, para el ciclo escolar 2016-2017.</p>
           <center> <a href="convocatoria" class="btn btn-primary">Convocatoria</a> </center>
        </div>
    </div>
  </textarea>
  </div>

                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Instagram:</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                        <input type="text" name="instagram" placeholder="Instagram" class="form-control" autocomplete="off" value="<?php echo $instagram; ?>"></div></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Youtube:</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-youtube" aria-hidden="true"></i></span>
                        <input type="text" name="youtube" placeholder="Youtube" class="form-control" autocomplete="off" value="<?php echo $youtube; ?>"></div></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Facebook:</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        <input type="text" name="facebook" placeholder="Facebook" class="form-control" autocomplete="off" value="<?php echo $facebook; ?>"></div></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Twitter:</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <input type="text" name="twitter" placeholder="Twitter" class="form-control" autocomplete="off" value="<?php echo $twitter; ?>"></div></div>
                    </div>
                    <button class="btn btn-block btn-outline btn-success" data-style="expand-right" type="submit">Actualizar</button>
                </form>


                        </div>
                    </div>
         </div>

    </div>
</div>