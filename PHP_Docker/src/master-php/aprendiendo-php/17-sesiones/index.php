<?php

session_start();
echo '<br>';
//variable normal
$varible_normal = 'Soy una variables norml';

$_SESSION['varible persistente'] = 'Soy una sesion activa';
echo $varible_normal."<br>";
echo '<h2>'.$_SESSION['varible persistente'].'</h2>';

include 'pagina1.php';
?>