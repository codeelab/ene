    <div class="row">
        <form action="model/correo_personalizado.php?op=4" method="post" role="form">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="id" class="control-label">Folio:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-ticket"> FNEP<?php echo date('Y')?>-</span></div>
                      <input class="form-control" type="text" name="id_publico_asistente_p" id="id_publico_asistente_p" value="<?=$row['id_publico']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="control-label">Nombre:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-user"></span></div>
                      <input class="form-control" type="text" name="nombre_asistente_p" id="nombre_asistente_p" value="<?=$row['nombre'].' '.$row['a_paterno'].' '.$row['a_materno']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="control-label">Correo:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-envelope"></span></div>
                      <input class="form-control col-sm-8 col-md-8" type="email" name="para_asistente_p" id="para_asistente_p" value="<?=$row['c_personal']?>" readonly>
                    </div>
                </div>
                <input type="hidden" name="opcion" value="4">
                <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="fa fa-send"></span>  Enviar</button>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <span class="fa fa-pencil-square-o"></span> <label>Mensaje:</label>
                  <textarea id="mensaje_asistente_p" name="mensaje_asistente_p" style="width: 100%;" rows="10">











                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  ----------------------------------------------------------------------------------------------------------------------
                  <p class="small"><a href="www.enemorelia.edu.mx">Escuela Normal para Educadoras de Morelia</a> | Email: <a href="mailto:contacto@enemorelia.edu.mx?subject=feedback">contacto@enemorelia.edu.mx</a> | <? echo date('Y');?></p>
                  </textarea>
                </div>
            </div>
        </form>
</div>
