<?php
echo '<br>';
    if(isset($_COOKIE['Migalleta'])){
        echo "Esta es una cookie sin caducidad";
    }else{
        echo "No hay galletas";
    }

    echo "<hr>";
    
    if(isset($_COOKIE['temporalCookie'])){
        echo "Esta es una cookie con caducidad";
    }else{
        echo "No hay galletas";
    }

?>

<a href="borrar_cookies.php">Borrar cookies</a>
<a href="index.php">Crar cookies</a>