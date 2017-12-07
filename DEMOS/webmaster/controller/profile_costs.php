<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-lg-8">
                    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>REGISTRO DE COSTOS A CONGRESO</h5>
        </div>
                        <div class="ibox-content">
        <form role="form" class="form-horizontal" action="lib/insert_costs.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Público:</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                        <input type="text" name="costo_publico" placeholder="Precio al Público General" class="form-control" autocomplete="off"></div>
                    </div></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Estudiantes:</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                        <input type="text" name="costo_estudiante" placeholder="Precio a Estudiantes" class="form-control" autocomplete="off"></div>
                    </div></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sede:</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></span>
                        <input type="text" name="sede" placeholder="Sede" class="form-control" autocomplete="off"></div>
                    </div></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ubicacion:</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <input type="text" name="ubicacion" placeholder="Ubicacion" class="form-control" autocomplete="off"></div>
                    </div></div>
                    <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                </form>


                        </div>
                    </div>
         </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>COSTOS A CONGRESO <? echo date('Y');?></h5>
            </div>
            <div class="ibox-content">
                <div class="widget style1">

                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-usd fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Público General </span>
                                <h2 class="font-bold"><?php echo $general; ?></h2>
                            </div>
                        </div>
                </div>
                <div class="widget style1">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-usd fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Estudiantes </span>

                                <h2 class="font-bold"><?php echo $estudiante; ?></h2>

                            </div>
                        </div>
                </div>
          </div>
            </div>
         </div>
    </div>

</div>