<?php 
echo ''.'<br>';


//Realizar la conexion de la base de datos 
$conexion = mysqli_connect('db','root','secret','phpmysql','3306');

if(mysqli_connect_errno()){
    echo 'Error al conectar'.mysqli_connect_error();
}else {
    echo 'Todo correcto'.'<br>';
}

//Realizar configuracion de los caracteres
mysqli_query($conexion, "SET NAMES 'ut8'");

$query = mysqli_query($conexion, 'select * from notes');


while($note =  mysqli_fetch_assoc($query)){
    #var_dump($note);
    echo '<h2>'.$note['title'].'</h2>'.'<br>';
    echo $note['descirption'].'<br>';
}

//Insertar datos a las tablas de la base de datos
$insert = "insert into phpmysql.notes values(null,'otra ves','ya me canse','rojo')";
$query = mysqli_query($conexion, $insert);

if($insert){
    echo 'Todo correcto men';
}else {
    echo 'Error men'.mysqli_connect_error();
}
?>