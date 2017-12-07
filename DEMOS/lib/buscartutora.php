<?php

if(isset($_POST["idtutora"]))
    {

        $opciones = '<option value="" name="nombre" id="nombre"> Elija su nombre de la lista</option>';

        $conexion= new mysqli("localhost","foroene_morelia","+For03ne$2017+","foroene_2017",3306);
        $strConsulta = "SELECT nombre, a_paterno, a_materno FROM tutoras WHERE escuela = ".$_POST["idtutora"];
        $acentos = $conexion->query("SET NAMES 'utf8'");
        $result = $conexion->query($strConsulta);

        while( $fila = $result->fetch_array() )
        {
            $opciones.='<option value="'.$fila["nombre"].' '.$fila["a_paterno"].' '.$fila["a_materno"].'">'.$fila["nombre"].' '.$fila["a_paterno"].' '.$fila["a_materno"].'</option>';
        }

        echo $opciones;
    }
?>