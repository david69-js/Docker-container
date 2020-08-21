<?php
$n1 = $_GET['numero1'];
$n2 = $_GET['numero2'];

if($n1 < $n2 && $n2 > $n1){
    for ($i=$n1; $i <= $n2; $i++) { 
        echo "<p>$i</p>";
    }
}else{
    echo 'Ingrese numeros correctos';
}

?>