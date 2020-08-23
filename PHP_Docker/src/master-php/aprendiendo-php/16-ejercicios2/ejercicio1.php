<?php
$numeros = [1,23,4,6,8,3,2,67,33];

echo "<h2>Recorer y mostrar</h2>";
foreach ($numeros as $numero) {
    echo "<p>$numero</p>";
}

echo "<h2>Odenar y mostrar</h2>";
    sort($numeros);
    foreach ($numeros as $numero) {
        echo "<p>$numero</p>";
}

echo "<h2>Mostrar la longitud</h2>";
   echo count($numeros);


$buscar = $_GET['numero1'];
echo "<h2>Numero a buscar $buscar</h2>";
   $search = array_search($buscar, $numeros);

    if(!empty($search)){
        echo "El numero existe y esta en le indice $search";
       
    }else{
        echo "El numero no existe"; 
    }


?>