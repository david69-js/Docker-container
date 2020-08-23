<?php
    session_start();

    $sesion = $_SESSION['numero'];
   echo $_SESSION['numero'];


   session_destroy();
?>