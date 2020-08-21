<?php
    $frase = 'Los genios no son tan gernios, ni los mediocres tan mediocres';

    echo $frase;

    function Locales(){
       global $frase;
        echo "<h1>$frase</h1>";
    }
    
    Locales();
?>