
<?php

$cantantes = ['Kase.o', 'Santiago', 'Sharif', 'Cancerbero'];
    //ordenar
    asort($cantantes);
    var_dump($cantantes);
    
    //Invertir
    arsort($cantantes);
    var_dump($cantantes);

    //Agregar
    array_push($cantantes, 'lancer');
    var_dump($cantantes);

    //Eliminar 
    array_pop($cantantes);
    var_dump($cantantes);

    //Indice del la array aleatorio
    $indece = array_rand($cantantes);
    echo "<p>$cantantes[$indece]</p>";

?>