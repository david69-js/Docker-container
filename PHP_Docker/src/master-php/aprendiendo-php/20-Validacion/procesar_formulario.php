<?php
$error = 'faltan_valores';

if(!empty($_POST['name']) && !empty($_POST['description']) && 
   !empty($_POST['old']) && !empty($_POST['email']) && !empty($_POST['pass'])){
	$error = 'ok';
	
	$name = $_POST['name'];
	$description = $_POST['description'];
	$old = (int) $_POST['old'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	// Validar el name
	if(!is_string($name) || preg_match("/[0-9]/", $name)){
		$error = 'name';
	}
	
	if(!is_string($description) || preg_match("/[0-9]/", $description)){
		$error = 'description';
	}
	
	if(!is_int($old) || !filter_var($old, FILTER_VALIDATE_INT)){
		$error = 'old';
	}
	
	if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error = 'email';
	}
	
	if(empty($pass) || strlen($pass)<5){
		$error = 'password';
	}
	
	/*
	var_dump($_POST);
	var_dump($error);
	die();
	 */
	
    }else{
        $error = 'faltan_valores';
    }

    if($error != 'ok'){
        header("Location:index.php?error=$error");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Proceso</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
                <h1>Datos del Usuario</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <?php if($error == 'ok'): ?>
                                <p><?= $name ?></p>             
                            <?php endif; ?>
                        </div>
                        <div class="card-subtitle  mb-2 text-muted">
                        <?php if($error == 'ok'): ?>
                                <p class="d-2"><?= $description ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="card-text">
                        <?php if($error == 'ok'): ?>
                                <p><?= $old ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="index.php">regresar</a>
</body>
</html>
