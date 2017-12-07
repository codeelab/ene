<?php
 echo "<li>";
 $ip=$_SERVER['REMOTE_ADDR']; //A la variable ip le asignamos la ip remota
  //Aquí le preguntamos por los navegadores más conocidos
if (ereg("Netscape", $_SERVER["HTTP_USER_AGENT"]))
    $navegador = "<img src='../assets/img/Safari.png' width='12px' alt='Safari'> Netscape";
elseif(ereg("Firefox", $_SERVER["HTTP_USER_AGENT"]))
    $navegador = "<img src='../assets/img/Firefox.png' width='12px' alt='Firefox'> FireFox";
elseif(ereg("MSIE", $_SERVER["HTTP_USER_AGENT"]))
    $navegador = "<img src='../assets/img/Explorer.png' width='12px' alt='Internet Explorer'> Microsoft IE";
elseif(ereg("Opera", $_SERVER["HTTP_USER_AGENT"]))
    $navegador = "<img src='../assets/img/Opera.png' width='12px' alt='Opera'> Opera";
elseif(ereg("Chrome", $_SERVER["HTTP_USER_AGENT"]))
    $navegador = "<img src='../assets/img/Chrome.png' width='12px' alt='Chrome'> Chrome";
else $navegador = "Navegador no conocido.";
    echo "<p> IP: ".$ip;
    echo "<br>Navegador: ".$navegador."</p>";
    echo "</li>";
?>