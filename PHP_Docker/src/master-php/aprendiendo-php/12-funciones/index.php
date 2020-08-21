<?php
//D|Funciones sin parametros
    function PrimeroF(){
        echo '<p>Victor</p>';
        echo '<p>Juan</p>';
        echo '<p>Marcos</p>';
        echo '<p>Kase.o</p>';
        echo '<hr>';
    }
    PrimeroF();
    PrimeroF();

 //Funciones con parametros 
 
    function SegundaF($nombre1, $nombre2, $nombre3, $nombre4){
        echo "<p>$nombre1</p>";
        echo "<p>$nombre2</p>";
        echo "<p>$nombre3</p>";
        echo "<p>$nombre4</p>";
        echo '<hr>';
    }




    //Calculadora con parametros

    
    function TerceraF($nombre1 = 3, $nombre2 = 4){
    
        echo "<p> La suma es :".($nombre1+$nombre2)." </p>";
        echo "<p> La resta es :".($nombre1-$nombre2)." </p>";
        echo "<p> La division es :".($nombre1/$nombre2)." </p>";
        echo "<p> La multiplicaion es :".($nombre1*$nombre2)." </p>";
        echo '<hr>';

        SegundaF('Pedro', 'Juanita', 'Nicole', 'Anderson');
    }
  
    TerceraF();
    TerceraF(23,4);
?>