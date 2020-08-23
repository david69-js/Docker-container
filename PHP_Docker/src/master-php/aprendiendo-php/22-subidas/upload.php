<?php

use function PHPSTORM_META\type;

$archivo = $_FILES['file'];
    $name = $archivo['name'];
    $type = $archivo['type'];

    if($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png' || $type == 'image/gif'){
        if(!is_dir('uploadImages')){
            mkdir('uploadImages');
        }
        move_uploaded_file($archivo['tmp_name'], 'uploadImages/'.$name);
        header("Refresh: 5; URL=index.php");
        echo '<h1>Success save file</h1>';
    }else{
        echo '<h1/>Introduce a correct file, please.<h1>';
        header("Refresh: 5; URL=index.php");
    }   
?>