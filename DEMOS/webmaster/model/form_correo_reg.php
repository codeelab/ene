    <div class="row">
        <form action="lib/correo.php" method="post" role="form">
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
                    <label for="inputText" class="control-label">Correo:</label>
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-envelope"></span></div>
                      <input class="form-control col-sm-8 col-md-8" type="email" name="para" id="para" value="<?=$row['c_personal']?>" readonly>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="fa fa-send"></span>  Enviar</button>
            </div>
            <div class="col-lg-6">
<input type="text" name="nombre" value="<?=$row['nombre']?>">
<input type="text" name="a_paterno" value="<?=$row['a_paterno']?>">
<input type="text" name="a_materno" value="<?=$row['a_materno']?>">
<input type="text" name="c_personal" value="<?=$row['c_personal']?>">
<input type="text" name="matricula" value="<?=$row['matricula']?>">
<input type="text" name="soy" value="<?=$row['soy']?>">
<input type="text" name="costo" value="<?=$row['costo']?>">
            </div>
        </form>
</div>
