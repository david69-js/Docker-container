<?php

//Debuggear 
$nombre = 'David';
echo '<br>';
    echo var_dump($nombre).'<br>';

//Fecha 
    echo date('d-M-y').'<br>';
    echo time().'<br>';

// matematicas
echo 'La raiz cuadrada es de 37 : '.sqrt(37).'<br>';

//Numero aleatorio
echo 'Numeros aleatorios entre 10 y 40 : '.rand(10, 40).'<br>';

//Pi
echo 'Mostrar el pi : '.pi().'<br>';

echo '<br>';

echo 'Redonder : '.round(5.342234);

//tipados
echo '<br>';
if(is_string($nombre)){
    echo 'Es un string';
}else{
    echo 'No es un string';
}

echo '<br>';
if(is_float($nombre)){
    echo 'Es un numero';
}else{
    echo 'Es string';
}
echo '<br>';
// Eliminar esparcios

$contenido = '      hola         ';

var_dump(trim($contenido));

echo '<br>';

//Contar caracteres de un string
$nombre2 = 'Hola de nuevo';

echo strlen($nombre2);

?>