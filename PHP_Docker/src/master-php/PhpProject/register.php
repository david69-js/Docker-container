<?php  header('Location: index.php');
    if(isset($_POST)){
        @session_start();
            //Importar la conexion a la base de datos
        require_once 'includes/connection.php';
        
        //Recoger y guardar los valores del formulario de registro
        $name = isset($_POST['name']) ? mysqli_real_escape_string($db ,$_POST['name']): false;
        $surname = isset($_POST['surname']) ? mysqli_real_escape_string($db, $_POST['surname']) : false;
        $email = isset($_POST['email']) ? trim($_POST['email']): false;
        $password = isset($_POST['password']) ? trim($_POST['password']) : false;
        //Array de errores
        $errors = [];
        //name valdiate
    if(!empty($name) && !is_numeric($name) && !preg_match('/[0-9]/', $name)){
        $name_validate = true;

    }else{
        $name_validate = false;
        echo $errors['name'] = 'El nombre no es valido'.'<br>';
    }
    //Surname validate
    if(!empty($surname) && !is_numeric($surname) && !preg_match('/[0-9]/', $surname)){
        $surname_validate = true;

    }else{
        $surname_validate = false;
        echo $errors['surname'] = 'El apellido no es valido'.'<br>';
    }

    //email validate    
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;

    }else{
        $email_validate = false;
        echo $errors['email'] = 'El email no es valido'.'<br>';
    }

    //password validate
    if(!empty($password)){
        $password_validate = true;
    }else{
        $password_validate = false;
        echo $errors['password'] = 'la contrasenia no es valida'.'<br>';
         
    }
    $guadarUsuario = false;
    if(count($errors) == 0 ){
        //Ingresar usuarios a la tabla de usuarios correspondientes
        $guadarUsuario = true;
        
        //Cifrar contrasenia
        $Security_password = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

      /*

        var_dump($password);
        
        var_dump($Security_password);

        //verificar si la password es la misma
        var_dump(password_verify($password, $Security_password));
        header('Location: index.php');

        die();*/


    
    
    $sql = "insert into users values(null, '$name','$surname', '$email', '$Security_password', curdate())";
    $save = mysqli_query($db, $sql);
        var_dump(mysqli_error($db));

        if($save){
            $_SESSION['completed']['general'] = 'Guardado con exito';
        }else{
            $_SESSION['error']['general'] = 'Error al guardar';
            
        }

    }else{
        $_SESSION['errors'] = $errors;
    }
    
}
?>