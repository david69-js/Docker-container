<?php
//Cookies guardan informacion del usuarios

setcookie("Migalleta", "Quieres una galleta"); //Esta no tiene caducidad

setcookie("temporalCookie", "Tienes poco tiempo para tener una cookie", time()+(60*60)); //tiempo se puede modificar

?>

<a href="ver_cookies.php">Ver las cookies</a>