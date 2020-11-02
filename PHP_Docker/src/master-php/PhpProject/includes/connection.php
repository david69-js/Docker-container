<?php @session_start();?>
<?php 
require_once 'helpers.php';
/*Connection to database*/
    $host = 'db';
    $user = 'root';
    $password = 'secret';
    $database = 'blog';
    $port = '3306';
    $db = mysqli_connect($host, $user, $password, $database, $port);

    mysqli_query($db, "SET NAMES 'ut8'");
    
    //iniciar sessoin