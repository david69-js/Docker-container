<?php require_once 'includes/connection.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

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
     <div class="icon-menu">
                    <a href="#" class="botton"><span>Menu</span>  <i class="fas fa-bars"></i></a>
             </div> 
            <div id="logo">
                <a href="index.php" >Blog de Videojuegos</a>
       
            </div>
    <!-----------Menu -------------->
    <div class="allnav">
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
            
            <div class="clearfix"></div>

            </nav>
    </div>

 
    </header>