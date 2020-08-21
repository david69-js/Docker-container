<?php 
    //Asi se definen las constantes


    define('nombre', 'Esta es mi contante');

    echo nombre;

    //Constantes predefinidas

    echo __FILE__;

    //Funcion de PHP

    function holaMundo(){
        echo __FUNCTION__;
    }

    holaMundo();
?>