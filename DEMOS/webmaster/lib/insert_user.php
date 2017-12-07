<?php
error_reporting( error_reporting() & ~E_NOTICE );
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

if(isset($_POST["nombre"])){$nombre = $_POST["nombre"]; }else $nombre=0;
if(isset($_POST["bio"])){$bio = $_POST["bio"]; }else $bio=0;
if(isset($_POST["pais"])){$pais = $_POST["pais"]; }else $pais=0;
if(isset($_POST["twitter"])){$twitter = $_POST["twitter"]; }else $twitter=0;
if(isset($_POST["facebook"])){$facebook = $_POST["facebook"]; }else $facebook=0;
if(isset($_POST["instagram"])){$instagram = $_POST["instagram"]; }else $instagram=0;
if(isset($_POST["youtube"])){$youtube = $_POST["youtube"]; }else $youtube=0;

if ($_FILES["imagen"]["error"] > 0){
    echo "ha ocurrido un error";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 100kb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 1500;

    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        //esta es la ruta donde copiaremos la imagen
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        $ruta = "../img/avatars_ponentes/" . $_FILES['imagen']['name'];
        //comprobamos si este archivo existe para no volverlo a copiar.
        //pero si quieren pueden obviar esto si no es necesario.
        //o pueden darle otro nombre para que no sobreescriba el actual.
        if (!file_exists($ruta)){
            //aqui movemos el archivo desde la ruta temporal a nuestra ruta
            //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
            //almacenara true o false
            $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
            if ($resultado){
                $imag = $_FILES['imagen']['name'];
            } else {
                echo '<script language="javascript">
                    alert("ocurrio un error al mover el archivo.");
                    window.location.href="speakers";
                    </script>';
            }
        }
    } else {
        echo '<script language="javascript">
            alert("archivo no permitido, es tipo de archivo prohibido o excede el tamaño de ' . $limite_kb. ' Kilobytes");
            window.location.href="speakers";
            </script>';
    }
}if ($_POST['opcion'] == 1){
    $sql="INSERT INTO ponentes(nombre, bio, pais, twitter, facebook, instagram, youtube, imagen, tipo) values ('".$nombre."','".$bio."','".$pais."','".$twitter."','".$facebook."','".$instagram."','".$youtube."','".$imag."',1)";
    mysql_query($sql);

}else{
    header ("Location: speakers");
}

?>
