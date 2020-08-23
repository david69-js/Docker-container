<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
  <?php
    include "includes/cabecera.php";
  ?>
    <!---Contenido--->
    <div>
        <h2>Esta es la pgina inicio</h2>
        <p>Este es un texto de prueba</p>
    </div>

    <hr>
    <?php
        include 'includes/footer.php';
    ?>

</body>
</html>