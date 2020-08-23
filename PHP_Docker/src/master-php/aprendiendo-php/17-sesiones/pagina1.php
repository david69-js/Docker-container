<?php

    session_start();
    echo $varible_normal."<br>"; //Esta no la reconoce 
    echo '<h2>'.$_SESSION['varible persistente'].'</h2>';

?>

<ul>
    <li><a href="index.php">Index</a></li>
    <li><a href="pagina1.php">Page1</a></li>
    <li><a href="logout.php">logout</a></li>
</ul>