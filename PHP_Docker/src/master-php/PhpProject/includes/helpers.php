<?php require_once 'connection.php';
    $db;
    function errorShow ($errors, $campo){
        $alert = '';
        if(isset($errors[$campo]) && !empty($campo)){
            $alert = "<div class='alert fail-alert'>".$errors[$campo]."</div>";
        }
        return $alert;
    }

    function errorsDelete (){
        $result = false;
        if(isset($_SESSION['errors'])){
         $_SESSION['errors'] = null;
            $result = session_unset(); 
        }
        if(isset($_SESSION['completed'])){
             $_SESSION['completed'] = null;
            $result = session_unset(); 
        }

        return $result;
    }
    
    function getCategory(){
        global $db;
        $sql = "SELECT * FROM category ORDER BY id asc";
       $category =  mysqli_query($db, $sql);
       
       $result = array();

       if($category && mysqli_num_rows($category) >= 1){
            $result = $category;
       }
       return $result;
    }
?>