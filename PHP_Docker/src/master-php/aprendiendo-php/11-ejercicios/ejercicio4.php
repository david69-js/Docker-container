<?php
   $n1 = $_GET['numero1'];
   $n2 = $_GET['numero2'];

    if(($n1) && ($n2)){
        echo "<p>La suma es ".($n2+$n1);
        echo "<p>La resta es ".($n2-$n1);
        echo "<p>La division es ".($n2/$n1);
        echo "<p>La multiplicacion  es ".($n2*$n1);
    }


?>