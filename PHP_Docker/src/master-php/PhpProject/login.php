<?php header('Location: index.php');
    //Redirigir al index


    //iniciar sesion y la conexion a la db
    require_once 'includes/connection.php';

    if(isset($_POST)){
    //Borrar session antigua
        if($_SESSION['error_login']){
            session_unset();
        }
    //Recoger los datos del formulario
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $security_password = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);
        //var_dump($security_password);

            //Consulta para comprobar los datos del usuario
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $login = mysqli_query($db,$sql);

        if($login && mysqli_num_rows($login) == 1){
           $user = mysqli_fetch_assoc($login);
            
            //comprobar la contresenia
            $security_password = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

            $verify = password_verify($password, $user['password']);

            if($verify){
            //Utilizar una session para guardar los datos del usuarios logueado       
                $_SESSION['user'] = $user;

            }else{
                //Si algo falla enviar una sesion con el fallo
                
                $_SESSION['error_login'] = 'Error de verificacion';
               }
        }else{
            $_SESSION['error_login'] = 'Error de verificacion';
        }

    }    
?>