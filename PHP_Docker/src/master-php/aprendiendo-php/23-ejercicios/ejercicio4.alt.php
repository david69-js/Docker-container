<?php
    if($_POST['numberOne']){
        $val1 = (int) $_POST['numberOne'];
    }
    if($_POST['numberTwo']){
        $val2 = (int) $_POST['numberTwo'];
    }

    if($_POST['sumar']){
         $sumar = 'sumar';
        echo "La suma es ".($val1+$val2);
    }
    if($_POST['restar']){
        $restar = 'restar';
       echo "La resta es ".($val1-$val2);
   }

    if($_POST['multiplicar']){
        $multiplicar = 'multiplicar';
    echo "La multiplicacion es ".($val1*$val2);
    }

    if($_POST['dividir']){
        $did = 'dividir';
    echo "La division es ".($val1/$val2);
    }
?>