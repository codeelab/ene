    <div class="row">
        <form action="model/correo_aviso.php?op=2" method="post" role="form">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="id" class="control-label">Folio:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-ticket"> FNEP<?php echo date('Y')?>-</span></div>
                      <input class="form-control" type="text" name="id_publico_estudiante_a" id="id_publico_estudiante_a" value="<?=$row['id_publico']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="control-label">Nombre:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-user"></span></div>
                      <input class="form-control" type="text" name="nombre_estudiante_a" id="nombre_estudiante_a" value="<?=$row['nombre'].' '.$row['a_paterno'].' '.$row['a_materno']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="control-label">Correo:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-envelope"></span></div>
                      <input class="form-control col-sm-8 col-md-8" type="email" name="para_estudiante_a" id="para_estudiante_a" value="<?=$row['c_personal']?>" readonly>
                    </div>
                </div>
                <input type="hidden" name="opcion" value="2">
                <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="fa fa-send"></span>  Enviar</button>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <span class="fa fa-pencil-square-o"></span> <label>Mensaje:</label>
                  <textarea id="mensaje_estudiante_a" name="mensaje_estudiante_a" style="width: 100%;">
                  <p>Estimado (a): <?=$row['nombre'].' '.$row['a_paterno'].' '.$row['a_materno']?><br>
                  Correo electrónico: <?=$row['c_personal']?><br>
                  Tipo de inscripción: Estudiante</p>

                  <p>Le informamos que a partir de la emisión del presente correo dispone de 48 horas para:
                  <ol>
                    <li>Realizar su pago en el banco indicado.</li>
                    <li>Enviar el comprobante de pago escaneado en formato PDF al correo: <b>foroenemorelia@gmail.com</b>, anexando su Folio y Nombre completo. </li>
                    <li>Después de 48 horas su registro será cancelado.</li>
                  </ol>
                  </p>

                  <p><b>Folio de registro No.: FNEP<?php echo date('Y')?>-<?=$row['id_publico']?></b></p>

                  <p>REGLAS DE PAGO OBLIGATORIOS, NO HAY EXCEPCIONES:<br>
                  <ol>
                    <li>El pago debe ser realizado de la siguiente formas:</li>
                    <ul>
                      <li>Ventanilla Bancomer.</li>
                      <li>Transferencia electrónica Bancomer a Bancomer.</li>
                      <li>Transferencia interbancaria de otros bancos, con cuenta "clabe".</li>
                      <li>Cajero Bancomer.</li>
                    </ul>
                    <li>Solo se aceptan pagos <b>INDIVIDUALES</b>.</li>
                    <li>No se aceptan pagos <b>GRUPALES</b>.</li>
                  </ol>
                  </p>

                  <p>DATOS DE PAGO:<br><br>
                  Para pagos en Banco Bancomer:<br>
                  Número de cuenta (pago en ventanilla): 0453006026 <br>
                  Número de cuenta "clabe" (interbancaria): 012470004530060260 <br>
                  Monto a pagar: $600
                  </p>

                  <p>Saludos cordiales</p>
                  <br>
                  ----------------------------------------------------------------------------------------------------------------------
                  <p class="small"><a href="www.enemorelia.edu.mx">Escuela Normal de Educadoras Profr. Serafín Contreras Manzo</a> | Email: <a href="mailto:foroenemorelia@gmail.com?subject=feedback">foroenemorelia@gmail.com</a> | Foro Nacional de Educación Preescolar <? echo date('Y');?></p>
                  </textarea>
                </div>
            </div>
        </form>
</div>
