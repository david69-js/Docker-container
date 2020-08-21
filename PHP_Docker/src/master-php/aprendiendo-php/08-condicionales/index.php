<?php
    //Condicionales IF


    /*
        Tipos de Operadores
         == Exactamente igual
         === Identico
         != Diferente
         || O
         && Y
         <= menor que 
         >= mayor que
         <> menor o igual
    */
    echo '<br>';
$color = 'green';

if($color == 'red'){
    echo 'El color es red'.'<br>';
}else{
    echo 'El color no es rojo'.'<br>';
}

$year = 2010;

if($year == 2020){
    echo 'El anio es 2020'.'<br>';
}else{
    echo 'El anio no es 2020'.'<br>';
}

if($year < 2020){
    echo 'El anio es menor a 2020'.'<br>';
}else{
    echo 'El anio es mayor o igual a 2020'.'<br>';
}

//Switch
echo '<br>';

$dia = 1;
    switch ($dia) {
        case 1:
            echo "Hoy es lunes";
            break;
        case 2:
            echo "Hoy es martes";
            break;    
        case 3:
            echo "Hoy es miercoles";
            break;    
        case 4:
            echo "Hoy es jueves";   
            break; 
        case 5:
            echo "Hoy es viernes"; 
            break;    
        case 6:
            echo "Hoy es sabado";  
            break;    
        case 7;
            echo "Hoy es domingo";
            break;
        
        default:
        echo "Saber que pedo men";
    }
echo '<hr>';

$i = 1;
switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
}
echo '<br>';
echo 'Instruccion 1'.'<br>';
echo 'Instruccion 2'.'<br>';
echo 'Instruccion 3'.'<br>';
echo 'Instruccion 4'.'<br>';
