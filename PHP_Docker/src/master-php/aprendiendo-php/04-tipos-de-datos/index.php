<?php 
/*Tipos de datos de php*/

    $entero = 23;
    $floats = 23.3;
    $string = 'hello';
    $hola = 'Este es un texto de prueba';
    $array [] = 'asdasd';
    $array [] = 'blaeas';

    echo gettype($string).'<br>';
    echo "Hola soy una variable $array[0]".'<br>';
    
    //Lo recomnedado es esto
    echo 'Hola soy otro texto de linea '.$floats;
?>