<div class="header-taller"></div>
<div class="col-lg-12 text-center">
    <h1>TALLERES <? echo date('Y');?></h1>
    <div class="navy-line"></div>
</div>
<section class="container features animated fadeInRight">

<table class="table table-condensed" id="tabla_folios" style="border-collapse:collapse;">

    <thead>
        <tr style="font-size: 16px; font-family: Arial;">
          <th>Nombre</th>
          <th>Espacios Disponibles</th>
          <th>Inscripción</th>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach ($tallerr as $t) {
                $hay = $t->cupo;
                if($t->cupo == 0){
                  $cupo="<div class='pendiente-adm'></div><span class='label label-default' style='margin: 15%;'>Agotado</span>";
                }else
                $cupo="<div class='pagado-adm'></div><span class='label label-default' style='margin: 15%;'>".$hay." Disponibles</span>";

                echo '<tr style="font-size: 16px; font-family: Arial;">';
                echo '<td>'.$t->nombres.'</td>';
                echo '<td>'.$cupo.'</td>';
                echo '<td><a href="registro" class="btn btn-warning btn-xs dropdown-toggle">Registro</a></td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>

</section>