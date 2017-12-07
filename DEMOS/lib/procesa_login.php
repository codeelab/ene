<?php
session_start();
include 'config.php';
$link=Conectarse();

$login = $_POST['login'];
$pass = $_POST['pass'];
$pass=sha1(md5($pass));

$query = sprintf("SELECT usuarios.id,
        usuarios.login,
        usuarios.nombre,
        usuarios.apaterno,
        usuarios.amaterno,
        usuarios.avatar,
        usuarios.shortbio,
        usuarios.profesion,
        usuarios.email,
        usuarios.phone,
        usuarios.nivel
    FROM usuarios WHERE usuarios.login='%s'&& usuarios.password = '%s'",
    $login, $pass);

$result=mysql_query($query,$link);


if(mysql_num_rows($result)){
    $array=mysql_fetch_array($result);

    $_SESSION["id_usuario"]= $array["id"];
    $_SESSION["login"]= $array["login"];
    $_SESSION["nombre"]= $array["nombre"];
    $_SESSION["apaterno"]= $array["apaterno"];
    $_SESSION["amaterno"]= $array["amaterno"];
    $_SESSION["avatar"]= $array["avatar"];
    $_SESSION["shortbio"]= $array["shortbio"];
    $_SESSION["profesion"]= $array["profesion"];
    $_SESSION["phone"]= $array["phone"];
    $_SESSION["email"]= $array["email"];
    $_SESSION["nivel"]= $array["nivel"];

    switch ($array["nivel"]) {
        case 'Administrador':
            header('Location: ../webmaster/index');
        break;
        case 'Contabilidad':
            header('Location: ../contabilidad/index');
        break;
        case 'Material':
            header('Location: ../material/index');
        break;
        case 'Estadistica':
            header('Location: ../estadistica/index');
        break;
        case 'Pagos':
            header('Location: ../pagos/index');
        break;
        case 'Registro':
            header('Location: ../reg/index');
        break;
        case 'Supervisor':
            header('Location: ../supervisor/index');
        break;
        default:
            header('Location: ../login?error');
        break;
    }
}else{
    header("Location: ../login?error");
}
?>