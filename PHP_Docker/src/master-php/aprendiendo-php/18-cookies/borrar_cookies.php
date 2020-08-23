<?php
    if($_COOKIE['Migalleta']){
        unset($_COOKIE['Migalleta']);
        setcookie('Migalleta', '', time()-100);
    }

    header('location: ver_cookies.php')
?>
