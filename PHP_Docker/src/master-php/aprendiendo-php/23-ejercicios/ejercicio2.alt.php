<?php
    $error = 'incorrect_data';

    if(!empty($_GET['name']) && !empty($_GET['last_name']) && !empty($_GET['email']) && !empty($_GET['pass'])){
        $error = 'ok';
        
        $name = $_GET['name'];
        $last_name = $_GET['last_name'];
        $email = $_GET['email'];
        $pass = $_GET['pass'];
        
        if(!is_string($name) || preg_match("/[0-9]/", $name)){
            $error = 'name';
        }
        if(!is_string($last_name) || preg_match("/[0-9]/", $last_name)){
            $error = 'last_name';
        }
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = 'email';
        }
        if(empty($pass) || strlen($pass) < 5){
            $error = 'pass';
        }
    }else{
        $error = 'incorrect_data';
    }
    if($error != 'ok'){
        header("Location:ejercicio2.php?error=$error");
    }
/*
    var_dump($_GET);
    var_dump($error);
    die();

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del usuario</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <?php if($error == 'ok'):?>
                            <p><?= $name?></p>
                        <?php endif;?>

                        <?php if($error == 'ok'):?>
                            <p><?= $last_name?></p>
                        <?php endif;?>
                        
                        <div class="col">
                            <h4>Email valid</h4>
                        <?php if($error == 'ok'):?>
                            <p><?= $email?></p>
                        <?php endif;?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

