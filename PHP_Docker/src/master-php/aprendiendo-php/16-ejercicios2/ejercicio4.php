<?php

$type1 = ['werwer', 'werwer'];
$type2 = 'Hola nenas';
$type3 = 123;
$type4 = true;

if(is_array($type1)){
    echo 'Es un array';
}

if(is_string($type2)){
    echo 'Es un string';
}

if(is_integer($type3)){
    echo 'Es un numero';
}

if(is_bool($type4)){
    echo 'Es un boolean';
}
?>