<?php

/*

  //Abrir archivo
    $archivo1 = fopen('archivo.txt', 'r');


     //Leer archivo
    while (!feof($archivo1)){
        $contenido = fgets($archivo1);
        echo $contenido.'<br>';
    }
    //cerrar archivo
    fclose($archivo1);

*/
  
//Copiar fichero 

//copy('archivo.txt', 'archivo_copiado') or die('Error al copiar');

//Renombrar un archivo
//rename('archivo_copiado', 'archivo_renombrado');

//Eliminar un archivo
//unlink('archivo_renombrado') or die('Error al borrar el archivo');

//Comprobar si fichero existe 
if(file_exists('archivo.txt')){
    echo 'El fichero existe';
}else{
  echo 'El fichero no exsite';
}


?>