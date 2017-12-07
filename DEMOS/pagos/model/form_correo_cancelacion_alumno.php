    <div class="row">
        <form action="model/correo_cancelacion.php?op=1" method="post" role="form">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="id" class="control-label">Folio:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-ticket"> FNEP<?php echo date('Y')?>-</span></div>
                      <input class="form-control" type="text" name="id_publico_alumno_c" id="id_publico_alumno_a" value="<?=$row['id_publico']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="control-label">Nombre:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-user"></span></div>
                      <input class="form-control" type="text" name="nombre_alumno_c" id="nombre_alumno_c" value="<?=$row['nombre'].' '.$row['a_paterno'].' '.$row['a_materno']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="control-label">Correo:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-envelope"></span></div>
                      <input class="form-control col-sm-8 col-md-8" type="email" name="para_alumno_c" id="para_alumno_c" value="<?=$row['c_personal']?>" readonly>
                    </div>
                </div>
                <input type="hidden" name="opcion" value="1">
                <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="fa fa-send"></span>  Enviar</button>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <span class="fa fa-pencil-square-o"></span> <label>Mensaje:</label>
                  <textarea id="mensaje_alumno_c" name="mensaje_alumno_c" style="width: 100%;">
                  <p>Estimado (a): <?=$row['nombre'].' '.$row['a_paterno'].' '.$row['a_materno']?><br>
                  Correo electrónico: <?=$row['c_personal']?><br>
                  Tipo de inscripción: Alumna ENE</p>

                  <p>Se ha cancelado su registro con<b> Folio No. FNEP<?php echo date('Y')?>-<?=$row['id_publico']?></b>, para el Foro Nacional de Educación Preescolar <? echo date('Y');?>.</p>

                  <p>Si Ud., desea, puede realizar nuevamente el registro para generar un nuevo folio.</p>

                  <p><b>MUY IMPORTANTE:</b> Si usted realizó su pago y no envió la ficha de depósito, haga caso omiso de esta notificación y preséntese el día del evento en el área de caja con su comprobante de pago original y la impresión de su registro.</p>

                  <p>Saludos cordiales</p>
                  <br>
                  ----------------------------------------------------------------------------------------------------------------------
                  <p class="small"><a href="www.enemorelia.edu.mx">Escuela Normal de Educadoras Profr. Serafín Contreras Manzo</a> | Email: <a href="mailto:foroenemorelia@gmail.com?subject=feedback">foroenemorelia@gmail.com</a> | Foro Nacional de Educación Preescolar <? echo date('Y');?></p>
                  </textarea>
                </div>
            </div>
        </form>
</div>
