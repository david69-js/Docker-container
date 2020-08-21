<?php

for ($i=0; $i <= 10 ; $i++) { 
    echo "<table border='1'>"
         .'<tr>'
         ."<td>Tabla del $i</td>"
         .'</tr>'
         .'</table>';   
    for ($o=0; $o  <= 10 ; $o++) { 
        echo "<table border='1'>"
        .'<tr>'
        ."<td>$i X $o = ".($i*$o).'</td>'
        .'</tr>'
        .'</table>';  
    } 
    echo'<hr>';
}
?>