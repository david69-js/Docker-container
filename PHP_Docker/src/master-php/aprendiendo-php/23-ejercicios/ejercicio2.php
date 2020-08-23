<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-----Bootstrap------>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Fomulario</title>
</head>
<body>
    <div class="container">

    <?php
       if($_GET['error']):
           $error = $_GET['error']; 
           
           switch($error):
               case 'name':
                    echo "<strong>You apparently have an error in name</strong>";
                    break;   
               
               case 'last_name':
                    echo "<strong>You apparently have an error in last_name</strong>";
                    break; 
                
                case 'email':
                    echo "<strong>You apparently have an error in email</strong>";
                    break; 
                
                case 'pass':
                    echo "<strong>You apparently have an error in password</strong>";
                    break;
                    
                default; 
                    echo 'Todo bien';
                    break;
                endswitch;
            endif;
    ?>
        <div class="row  justify-content-center">
            <h1>Introduce your corresponding data</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="ejercicio2.alt.php" method="GET">
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pass">PASSWORD</label>
                                <input type="password" name="pass"class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    

</body>
</html>