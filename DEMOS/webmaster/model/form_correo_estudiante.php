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
                  <p>Estimado (a): <?=$row['nombre'].' '.$row['a_paterno'].' '.$row['a_materno']?><br>
                  Correo electrónico: <?=$row['c_personal']?><br>
                  Tipo de inscripción: Estudiante<br>
                  Monto pagado: $600</p>

                  <p>Confirmamos que hemos recibido el pago del <b>Folio No: FNEP<?php echo date('Y')?>-<?=$row['id_publico']?></b>, con lo cual se valida su participación en el Foro Nacional de Educación Preescolar <? echo date('Y');?>.</p>

                  <p>Para recoger el material e ingresar al Foro, es <b>INDISPENSABLE</b> presentar:<br>
                  <ol>
                    <li>El presente correo impreso.</li>
                    <li>Ficha <b>ORIGINAL</b> de depósito.</li>
                    <li>Si usted se registro como Estudiante, deberá presentar <b>INDISPENSABLEMENTE</b> su credencial de estudiante <b>VIGENTE</b>, de lo contrario deberá cubrir la diferencia del monto de la inscripción como <b>PARTICULAR</b>.</li>
                    <li>SIN EXCEPCIÓN, <b>NO PODRÁ RECOGER LOS MATERIALES</b> SI NO PRESENTA ESTOS DOCUMENTOS.</li>
                  </ol>
                  </p>

                  <p><b>IMPORTANTE:</b> El material será entregado el dia martes 4 de abril en un horario de 17:00 a 19:30 hrs y el miércoles a partir de las 7:30 hrs. en las instalaciones del Centro de Convenciones de Morelia.</p><br>

                  <p>Saludos cordiales</p>
                  <br>
                  ----------------------------------------------------------------------------------------------------------------------
                  <p class="small"><a href="www.enemorelia.edu.mx">Escuela Normal de Educadoras Profr. Serafín Contreras Manzo</a> | Email: <a href="mailto:foroenemorelia@gmail.com?subject=feedback">foroenemorelia@gmail.com</a> | Foro Nacional de Educación Preescolar <? echo date('Y');?></p>
                  </textarea>
                </div>
            </div>
        </form>
</div>
