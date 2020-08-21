<?php
//Bucles while 
/*
$numero = 0;

while ($numero <= 100) {
    echo "<p>$numero</p>";
    $numero++;
}
*/

if(isset($_GET['numero'])){

    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    echo $numero = 1;
}

var_dump($numero);
    echo '<h3>Tabla de multiplicar del numero que viene de la url</h3>';

$numero2 = 0;
    while ($numero2 <= 10 ) {
        echo "<p>$numero X $numero2 = ".($numero2*$numero).'</p>';
        $numero2++;
    }

    //Do while

 $edad = 18;   
 $contador = 0;
   do {
    echo "<p>Tienes acceso al local privado".$contador++.'</p>';
   } while ($edad >= 18 && $contador <= 10); 

?>