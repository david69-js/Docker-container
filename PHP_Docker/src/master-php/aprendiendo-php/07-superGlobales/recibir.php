<?php

//Metodo por Get, la cual pasa parametros por la url
    echo '<h1>Welcome to my web page GET</h1>';
    
    echo $_GET['name'].' - ';

    echo $_GET['last_name'];


//Metodo por POST la cual pasa datos de manera oculta

echo '<h1>Welcome to my web page POST</h1>';
    
echo $_POST['name'].' - ';

echo $_POST['last_name'];

?>