<?php

$coleccion = [];

    for ($i=0; $i < 120; $i++) { 
        echo '<p>'.array_push($coleccion, $i).'</p>';
    }
?>


<?php
    $ingresa = $_GET['name'];

    if($ingresa == ''){
        echo 'La variables esta vacia, rellenala';
        echo '<a href="ejercicio3.php">Rellenar variable</a>';
    }else{
        echo "<p><strong>$ingresa</strong></p>".'<br>';
    }
?>

