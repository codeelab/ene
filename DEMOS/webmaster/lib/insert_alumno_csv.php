<?php

//connect to the database
$connect = mysql_connect("localhost","foroene_morelia","+For03ne$2017+");
mysql_select_db("foroene_2017",$connect); //select the table
//

if ($_FILES[csv][size] > 0) {

    //Obtener el archivo csv
    $file = $_FILES[csv][tmp_name];
    $handle = fopen($file,"r");
// Hacer un bucle a través del archivo csv e insertar en la base de datos
    do {
        if ($data[0]) {
            mysql_query("INSERT INTO matricula (nombre, a_paterno, a_materno, matricula) VALUES
                (
                    '".addslashes($data[0])."',
                    '".addslashes($data[1])."',
                    '".addslashes($data[2])."',
                    '".addslashes($data[3])."'
                )
            ");
        }
    } while ($data = fgetcsv($handle,1000,",","'"));
    //redirect
    header('Location: ../alumnos'); die;

}

?>