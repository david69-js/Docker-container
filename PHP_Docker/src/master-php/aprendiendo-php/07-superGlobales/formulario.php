<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>

<form action="recibir.php" method="GET" >
    <p>
    <label for="name">Name</label>
    <input type="text"  name="name">

    </p>
   
  <p>
  <label for="last_name">Last name</label>
    <input type="text" name="last_name">
  </p>

    <input type="submit"  value="Send">

</form>
    

    
<form action="recibir.php" method="POST" >
    <p>
    <label for="name">Name</label>
    <input type="text" name="name">

    </p>
   
  <p>
  <label for="last_name">Last name</label>
    <input type="text" name="last_name">
  </p>

    <input type="submit" value="Send">

</form>
</body>
</html>