    <div class="row">
        <form action="model/correo.php?op=2" method="post" role="form">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="id" class="control-label">Folio:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-ticket"> FNEP<?php echo date('Y')?>-</span></div>
                      <input class="form-control" type="text" name="id_publico_estudiante" id="id_publico_estudiante" value="<?=$row['id_publico']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="control-label">Nombre:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-user"></span></div>
                      <input class="form-control" type="text" name="nombre_estudiante" id="nombre_estudiante" value="<?=$row['nombre'].' '.$row['a_paterno'].' '.$row['a_materno']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="control-label">Correo:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-envelope"></span></div>
                      <input class="form-control col-sm-8 col-md-8" type="email" name="para_estudiante" id="para_estudiante" value="<?=$row['c_personal']?>" readonly>
                    </div>
                </div>
                <input type="hidden" name="opcion" value="2">
                <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="fa fa-send"></span>  Enviar</button>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <span class="fa fa-pencil-square-o"></span> <label>Mensaje:</label>
                  <textarea id="mensaje_estudiante" name="mensaje_estudiante" style="width: 100%;">
                  <p>Estimado (a): <?=$row['nombre'].' '.$row['a_paterno'].' '.$row['a_materno']?>, con cuenta de correo <?=$row['c_personal']?>, se ha <strong>Confirmado su pago</strong> y se confirma su registro en el Foro Nacional de Educación Preescolar <? echo date('Y');?>.</p>

                  <p>El folio de registro es: <b>FNEP<?php echo date('Y')?>-<?=$row['id_publico']?></b>.<br><br> El cual es un identificador importante para cualquier aclaración y ha sido agregado al sistema de la Escuela Normal para Educadoras de Morelia.</p>

                  <p>Saludos cordiales</p>
                  <br>
                  ----------------------------------------------------------------------------------------------------------------------
                  <p class="small"><a href="www.enemorelia.edu.mx">Escuela Normal para Educadoras de Morelia</a> | Email: <a href="mailto:contacto@enemorelia.edu.mx?subject=feedback">contacto@enemorelia.edu.mx</a> | <? echo date('Y');?></p>
                  </textarea>
                </div>
            </div>
        </form>
</div>
