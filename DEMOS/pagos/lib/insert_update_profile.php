<?php
error_reporting( error_reporting() & ~E_NOTICE );
require_once("dbcon.php");
$conexion = mysql_connect($host, $username, $password);
mysql_select_db($db_name,$conexion);

$id=$_POST['id'];
if(isset($_POST["nombre"])){$nombre = $_POST["nombre"]; }else $nombre="S/N";
if(isset($_POST["amaterno"])){$amaterno = $_POST["amaterno"]; }else $amaterno="S/N";
if(isset($_POST["apaterno"])){$apaterno = $_POST["apaterno"]; }else $apaterno="S/N";
if(isset($_POST["login"])){$login = $_POST["login"]; }else $login="Control";
if(isset($_POST["shortbio"])){$shortbio = $_POST["shortbio"]; }else $shortbio="S/N";
if(isset($_POST["profesion"])){$profesion = $_POST["profesion"]; }else $profesion="S/N";
if(isset($_POST["email"])){$email = $_POST["email"]; }else $email="S/N";
if(isset($_POST["phone"])){$phone = $_POST["phone"]; }else $phone="S/N";

if ($_FILES["avatar"]["error"] > 0){
    echo "ha ocurrido un error";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 100kb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 1500;

    if (in_array($_FILES['avatar']['type'], $permitidos) && $_FILES['avatar']['size'] <= $limite_kb * 1024){
        //esta es la ruta donde copiaremos la avatar
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        $ruta = "../img/avatars_usuarios/" . $_FILES['avatar']['name'];
        //comprobamos si este archivo existe para no volverlo a copiar.
        //pero si quieren pueden obviar esto si no es necesario.
        //o pueden darle otro nombre para que no sobreescriba el actual.
        if (!file_exists($ruta)){
            //aqui movemos el archivo desde la ruta temporal a nuestra ruta
            //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
            //almacenara true o false
            $resultado = @move_uploaded_file($_FILES["avatar"]["tmp_name"], $ruta);
            if ($resultado){
                $imag = $_FILES['avatar']['name'];
            } else {
                echo '<script language="javascript">
                    alert("ocurrio un error al mover el archivo.");
                    window.location.href="../profile";
                    </script>';
            }
        }
    } else {
        echo '<script language="javascript">
            alert("archivo no permitido, es tipo de archivo prohibido o excede el tamaño de ' . $limite_kb. ' Kilobytes");
            window.location.href="../profile";
            </script>';
    }
}
    $sql=("UPDATE usuarios
             SET nombre='$nombre', apaterno='$apaterno',amaterno='$amaterno', login='$login', shortbio='$shortbio', profesion='$profesion', email='$email', phone='$phone', avatar='$imag' WHERE id=".$id);
    echo $sql;
    echo exit;
   //mysql_query($sql);

    header ("Location: ../profile");

?>
