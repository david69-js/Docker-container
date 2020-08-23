



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Validacion</title>
</head>
<body>

    <div class="container">

<?php
if(isset($_GET['error'])){
    $error = $_GET['error'];
    
    if($error == 'faltan_valores'){
        echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
    }
    
    if($error == 'name'){
        echo '<strong style="color:red">Introduce bien el nombre</strong>';
    }
    
    if($error == 'description'){
        echo '<strong style="color:red">Los apellidos no son correctos</strong>';
    }
    
    if($error == 'old'){
        echo '<strong style="color:red">Introduce una edad correcta</strong>';
    }
    
    if($error == 'email'){
        echo '<strong style="color:red">El correo es erroneo</strong>';
    }
    
    if($error == 'pass'){
        echo '<strong style="color:red">Introduce una contraseña de más de 5 letras</strong>';
    }
}
?>

        <h1>Formulario</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="procesar_formulario.php" method="POST">
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" name="description" class="form-control" require="required">
                        </div>    

                        <div class="form-group">
                            <label for="odl">Years Old</label>
                            <input type="number" name="old" class="form-control" require="required">
                        </div>    

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control"require="required">
                        </div>   
                        
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="pass" class="form-control"require="required">
                        </div>    

                        <div class="row justify-content-center">
                        <div class="btn">
                            <input type="submit" value="send" class="btn btn-success" >
                        </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>