<?php
$pelicula = '<p>Batman<p>';


$peliculas = ['Batman', 'Drake', 'Sex education', 'perpectiva'];
$cantantes = ['Kase.o', 'Santiago', 'Sharif', 'Cancerbero'];

echo $peliculasp[1].'<br>';
echo $pelicula.'<br>';
var_dump($peliculas);


for($i = 0; $i < count($peliculas); $i++){
    echo "<p>$i - $peliculas[$i]</p>";
}

foreach ($cantantes as $cantante) {
    echo "<p> - $cantante</p>";
}

//Array asociativa  darle valor a cierto variable dentro del array

$canciones = [
    "dosis" => 'Pequnias dosis',
    "sencillo" => 'sencillo',
    "martes" => 'martes trece'
];

var_dump($canciones);

//arrays multidimanesionales

$nombres = [
    [
    'nombre' => 'Pedro',
    'email' => 'da39093@gmail.com'
    ],
[
    'nombre' => 'Lucas',
    'email' => 'luacs23@gmail.com'
    ],
[
    'nombre' => 'Lucho',
    'email' => 'lucho12@gmail.com'
    ]
];

foreach ($nombres as $nombre) {
    echo '<p>'.$nombre['nombre'];
}   



?>