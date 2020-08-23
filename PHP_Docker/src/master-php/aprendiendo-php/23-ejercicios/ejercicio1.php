<?php
    session_start();

    if(!$_SESSION['numero']){
        $_SESSION['numero'] = 0;
    }

    if(isset($_GET['counter']) && $_GET['counter'] == 1){
        $_SESSION['numero']++;
    }
    if(isset($_GET['counter']) && $_GET['counter'] == 0){
        $_SESSION['numero']--;
    }

?>

<h1>El numero de sessiones es <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumento de Session</a>
<a href="ejercicio1.php?counter=0">Decremento de Session</a>