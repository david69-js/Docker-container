<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----------CDN-Bootstrap-------->    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!-------------Font Awasome---------------->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-----------CSS---------->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Php Project</title>
</head>
<body>

     <!-----------Cabecera-------------->

     <header id="header">
            <div id="logo">
                <a href="index.php" >Blog de Videojuegos</a>
            </div>
       
    <!-----------Menu -------------->
        <nav id="nav">
 
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php">Categoria 1</a></li>
                <li><a href="index.php">Categoria 2</a></li>
                <li><a href="index.php">Categoria 3</a></li>
                <li><a href="index.php">Categoria 4</a></li>
                <li><a href="index.php">Sobre mi</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
            <input type="checkbox" id="check">
            <label for="check" >
                <i class="fas fa-bars" class="botton"></i>
            </label>
        <div class="clearfix"></div>
        </nav>
 
    </header>

   
    <div class="container">

         
        <!-----------Barra Lateral-------------->
        <aside>
            <p>Login</p>
            <div id="login" class="block-aside">
                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Password</label>
                <input type="password" name="password">
                
                <input type="submit" name="send" value="Send">
            </div>
        <!-----------Caja Principal-------------->

            <div id="register" class="block-aside">
                <p>Register</p>
                <label for="name">Name</label>
                <input type="text" name="name">

                <label for="surname">Surname</label>
                <input type="email" name="email">

                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Password</label>
                <input type="password" name="password">

                <input type="submit" name="register" value="Register">
            </div>
        </aside>

        <div class="inputs">
            <h1>Ultimas entradass!</h1>
            
            <article>
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. A minima dolorem ea quis necessitatibus, placeat mollitia earum tempora 
                </p>
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. A minima dolorem ea quis necessitatibus, placeat mollitia earum tempora 
                </p>
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. A minima dolorem ea quis necessitatibus, placeat mollitia earum tempora 
                </p>
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. A minima dolorem ea quis necessitatibus, placeat mollitia earum tempora 
                </p>
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. A minima dolorem ea quis necessitatibus, placeat mollitia earum tempora 
                </p>
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. A minima dolorem ea quis necessitatibus, placeat mollitia earum tempora 
                </p>
            </article>
        </div>
    <!-----------Footer-------------->
        <footer id="footer">David Toj Alvarez &copy; 2020</footer>

    </div>





<!----------CDN-Bootstrap-jspoper------->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>