    <div class="row">
        <form action="lib/insert_ficha.php" method="post" role="form" id="ficha">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="id" class="control-label">Folio:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-ticket"> FNEP<?php echo date('Y')?>-</span></div>
                      <input class="form-control" type="text" name="id_publico" id="id_publico" value="<?=$row['id_publico']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="control-label">Nombre:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-user"></span></div>
                      <input class="form-control" type="text" name="nombre" id="nombre" value="<?=$row['nombre'].' '.$row['a_paterno'].' '.$row['a_materno']?>" readonly>
                      </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="control-label">Costo:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-money"></span></div>
                      <input class="form-control" type="text" name="costo" id="costo" value="<?=$row['costo']?>" readonly>
                      </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="inputText" class="control-label">Ficha:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-credit-card"></span></div>
                      <input class="form-control col-sm-8 col-md-8" type="text" name="referencia_pago" id="referencia_pago" placeholder="Ingrese el número de movimiento de pago.">
                    </div>
                </div>
<!--
                <div class="form-group">
                    <label for="inputText" class="control-label">Pago:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-money"></span></div>
                      <input class="form-control" type="text" name="pago" id="pago">
                      </div>
                </div>
-->
                <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="fa fa-send"></span>  Enviar</button>
            </div>
        </form>
</div>
